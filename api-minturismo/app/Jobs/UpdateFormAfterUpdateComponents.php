<?php

namespace App\Jobs;

use App\Models\Establishments\Results;
use App\Models\Forms\Component;
use App\Models\Forms\Form;
use App\Models\Forms\SubTopic;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class UpdateFormAfterUpdateComponents implements ShouldQueue
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
     */
    public function handle()
    {
        try {
            DB::beginTransaction();
            $model = $this->request;
            if ($model->resultable_type == Component::class) {
                $forms = $model->resultable->forms()->get();
                foreach ($forms as $form){
                    $components=$form->components->pluck('id');
                    $componentsOfForm = Results::where('resultable_type', Component::class)
                        ->whereIn('resultable_id', $components->toArray())
                        ->where('establishment_id', $model->establishment_id)
                        ->where('intent_id', $model->intent_id)
                        ->get();
                    $sumScoreResultsChildren = $componentsOfForm->sum('score');
                    $countResultsCfChildren=$componentsOfForm->count();
                    $scoreSubTopic=0;
                    if ($countResultsCfChildren > 0) {
                        $scoreSubTopic = $sumScoreResultsChildren / $countResultsCfChildren;
                    }
                    $resultForm = Results::where('resultable_type', Form::class)
                        ->where('resultable_id', $form->id)
                        ->where('establishment_id', $model->establishment_id)
                        ->where('intent_id', $model->intent_id)
                        ->first();
                    if ($resultForm){
                        $resultForm->score = number_format($scoreSubTopic, 2);
                        $resultForm->save();
                    }
                }
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw  new \Exception($exception->getMessage());
        }
    }
}
