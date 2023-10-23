<?php

namespace Database\Seeders;

use App\Http\Controllers\Establishments\EstablishmentController;
use App\Models\Establishments\Establishment;
use App\Models\Establishments\Results;
use App\Models\Forms\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompleteMissingResults extends Seeder
{
    protected $establishmentController;

    public function __construct(EstablishmentController $establishmentController)
    {
        $this->establishmentController = $establishmentController;

    }

    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        //
        try {
            DB::beginTransaction();
            $establishments = Establishment::with(['results' => function ($q) {
                $q->where('resultable_type', Question::class);
            }])->get();
            foreach ($establishments as $establishment) {
                $forms = $establishment->forms();
                $maxIntent = $forms->max('attempts');
                if ($maxIntent) {
                    $idIntent = $forms->where('attempts', $maxIntent)->first()->pivot->id;
                    $results = $establishment->results;
                    if ($results) {
                        foreach ($results as $result) {
                            $ques = $result->resultable;
                            if ($result->resultable->questionDependents()->count()) {
                                $dependentParent = $result->resultable->questionDependents->first();
                                $answerDependentParent = $results
                                    ->where('resultable_id', $dependentParent->id)
                                    ->where('establishment_id', $establishment->id)
                                    ->where('intent_id', $idIntent)->first();
                                if ($result->resultable->type == 'si_no') {
                                    if (isset($answerDependentParent) && $answerDependentParent) {
                                        if ($ques->answer_required == 'positive' && $answerDependentParent->score <= 0) {
                                            $result->score = NULL;
                                            $result->save();
                                        }
                                    }
                                }
                            }

                            if ($result->resultable->code == 'd12' && $result->score == null) {
                                foreach ($result->resultable->children()->get() as $dependent) {
                                    $answer = $results
                                        ->where('resultable_id', $dependent->id)
                                        ->where('establishment_id', $establishment->id)
                                        ->where('intent_id', $idIntent)->first();
                                    $answer->score = null;
                                    $answer->save();
                                }
                            }

                        }
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
