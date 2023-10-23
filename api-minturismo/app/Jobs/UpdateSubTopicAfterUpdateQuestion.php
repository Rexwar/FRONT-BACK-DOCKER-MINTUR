<?php

namespace App\Jobs;

use App\Models\Establishments\Results;
use App\Models\Forms\Question;
use App\Models\Forms\SubTopic;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class UpdateSubTopicAfterUpdateQuestion implements ShouldQueue
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
        //
        try {
            DB::beginTransaction();
            $model = $this->request;
            if ($model->resultable_type == Question::class) {
                $subTopics = $model->resultable->subTopics();
                foreach ($subTopics->get() as $subTopic) {
                    $childrenSubtopic = $subTopic->questions()->where('has_score', 1);
                    $idsChildrenSubTopic = $childrenSubtopic->pluck('question_id');
                    $resultsOfChildren = Results::where('resultable_type', Question::class)
                        ->whereIn('resultable_id', $idsChildrenSubTopic->toArray())
                        ->where('establishment_id', $model->establishment_id)
                        ->where('intent_id', $model->intent_id)
                        ->get();
                    $sumScoreResultsChildren = 0;
                    $countResultsCfChildren = 0;

                    $questionsToCalc = [];
                    foreach ($resultsOfChildren as $item) {
                        $ques = $item->resultable;
                        if ($item->resultable->questionDependents()->count()) {
                            $dependentParent = $ques->questionDependents->first();
                            $answerDependentParent = Results::with(
                                ['resultable'])->where('resultable_type', Question::class)
                                ->where('resultable_id', $dependentParent->id)
                                ->where('establishment_id', $model->establishment_id)
                                ->where('intent_id', $model->intent_id)->first();
                            if ($answerDependentParent) {
                                if ($ques->answer_required == 'positive' && $answerDependentParent->score > 0) {
                                    array_push($questionsToCalc, $item);
                                } else if ($ques->answer_required == 'negative' && $answerDependentParent->score > 0) {
                                    array_push($questionsToCalc, $item);
                                }
                            }
                        } else {
                            array_push($questionsToCalc, $item);
                        }
                    }
                    $questionsToCalc = collect($questionsToCalc);

                    foreach ($questionsToCalc as $resultsOfChild) {
                        if ($resultsOfChild->resultable->has_score) {
                            if ($resultsOfChild->resultable->type == 'relacionada') {
                                $sumScoreResultsChildren += $resultsOfChild->score;
                                $countResultsCfChildren++;
                            } else if ($resultsOfChild->resultable->type == 'si_no') {
                                if ($resultsOfChild->score == 1) {
                                    $sumScoreResultsChildren += $resultsOfChild->score * 100;
                                }
                                $countResultsCfChildren++;
                            } else if ($resultsOfChild->resultable->type == 'rango_1_5') {
                                $sumScoreResultsChildren += $resultsOfChild->score * 20;
                                $countResultsCfChildren++;
                            }
                        }
                    }

                    if ($countResultsCfChildren > 0) {
                        $scoreSubTopic = $sumScoreResultsChildren / $countResultsCfChildren / 10;
                    }
                    $resultSubTopic = Results::where('resultable_type', SubTopic::class)
                        ->where('resultable_id', $subTopic->id)
                        ->where('establishment_id', $model->establishment_id)
                        ->where('intent_id', $model->intent_id)
                        ->first();
                    if ($resultSubTopic) {
                        $resultSubTopic->score = number_format($scoreSubTopic, 2);
                        $resultSubTopic->save();
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
