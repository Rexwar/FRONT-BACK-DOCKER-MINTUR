<?php

namespace App\Jobs;

use App\Models\Establishments\Results;
use App\Models\Forms\Question;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class UpdateQuestionParent implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $request;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        //
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     * @throws \Exception
     */
    public function handle()
    {
        //
        try {
            DB::beginTransaction();
            $model = $this->request;
            $question = $this->request->resultable;
            if ($question && $question->children_type == 'multiple') {
                $children = $question->children;
                $sumParent = 0;

                foreach ($children as $child) {
                    $resultOfChild = Results::with(['resultable'])->where('resultable_id', $child->id)
                        ->where('resultable_type', $model->resultable_type)
                        ->where('establishment_id', $model->establishment_id)
                        ->where('intent_id', $model->intent_id)->first();
                    if ($resultOfChild->score == 1) {
                        list($dividend, $divisor) = sscanf($resultOfChild->resultable->value, "%d/%d");
                        if ($dividend && $divisor) {
                            $result = $dividend / $divisor;
                            $sumParent += $result;
                        } else {
                            $sumParent += $resultOfChild->resultable->value;
                        }

                    }
                }
                $results = Results::where('resultable_id', $question->id)
                    ->where('resultable_type', $model->resultable_type)
                    ->where('establishment_id', $model->establishment_id)
                    ->where('intent_id', $model->intent_id)->get();

                foreach ($results as $r) {
                    $r->score = (string)$sumParent;
                    $r->save();
                }
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();

            throw new \Exception($exception->getMessage());
        }
    }
}
