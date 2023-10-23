<?php

namespace App\Jobs;

use App\Models\Establishments\Results;
use App\Models\Forms\Component;
use App\Models\Forms\Question;
use App\Models\Forms\SubTopic;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class UpdateComponentAfterUpdateSubTopic implements ShouldQueue
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
            if ($model->resultable_type == SubTopic::class) {
                $component = $model->resultable->component()->first();
                $subTopics=$component->subTopics->pluck('id');
                $subTopicsOfComponent = Results::where('resultable_type', SubTopic::class)
                    ->whereIn('resultable_id', $subTopics->toArray())
                    ->where('establishment_id', $model->establishment_id)
                    ->where('intent_id', $model->intent_id)
                    ->get();
                $sumScoreResultsChildren = $subTopicsOfComponent->sum('score');
                $countResultsCfChildren=$subTopicsOfComponent->count();
                $scoreSubTopic=0;
                if ($countResultsCfChildren > 0) {
                    $scoreSubTopic = $sumScoreResultsChildren / $countResultsCfChildren;
                }
                $resultComponent = Results::where('resultable_type', Component::class)
                    ->where('resultable_id', $component->id)
                    ->where('establishment_id', $model->establishment_id)
                    ->where('intent_id', $model->intent_id)
                    ->first();
                if ($resultComponent){
                    $resultComponent->score = number_format($scoreSubTopic, 2);
                    $resultComponent->save();
                }
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw  new \Exception($exception->getMessage());
        }
    }
}
