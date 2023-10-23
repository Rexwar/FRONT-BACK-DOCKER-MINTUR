<?php

namespace App\Http\Controllers\Establishments;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEstablishmentRequest;
use App\Http\Requests\UpdateEstablishmentRequest;
use App\Models\Establishments\Establishment;
use App\Models\Establishments\Results;
use App\Models\Forms\Component;
use App\Models\Forms\Form;
use App\Models\Forms\Question;
use App\Models\Forms\SubTopic;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class EstablishmentController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' =>
            [
                'store',
                'showActiveEstablishmentForm',
                'update',
                'showQuestionsOfSubTopicValidate',
                'showActiveEstablishment',
                'showQuestionsOfSubTopic',
                'showQuestionsResults',
                'showPercentageForm',
                'updateIntent',
            ]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function getAll()
    {
        try {
            $data = Establishment::with([
                'forms',
                'establishmentType',
                'results' => function ($q) {
                    $q->where('resultable_type', Form::class);
                },
                'results.resultable'
            ])->get();

            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function getAllResults()
    {
        try {
            $data = Establishment::count();

            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function getAllLastDay()
    {
        try {
            $data = Establishment::whereDate('created_at', '=', Carbon::today()->toDateString())
                ->count();
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function getAllGroupedByType()
    {
        try {
            $data = Establishment::with(['establishmentType'])->get()->groupBy('establishment_type_id');

            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function getEstablishmentsNoCompletedForm()
    {
        try {
            $establishments = Establishment::get();
            $data = [];
            $countZeroComplete = 0;
            $atLeastOneComplete = 0;
            $allComplete = 0;
            $count = 0;
            $sumPercentage = 0;
            foreach ($establishments as $establishment) {
                $forms = $establishment->forms();
                if ($forms) {
                    $maxIntent = $forms->max('attempts');
                    if ($maxIntent) {
                        $percentageEstablishment = $establishment->progress;
                        if ($percentageEstablishment == 0) {
                            $countZeroComplete++;
                        } else if ($percentageEstablishment > 0 && $percentageEstablishment < 100) {
                            $atLeastOneComplete++;
                        } else if ($percentageEstablishment >= 100) {
                            $allComplete++;
                        }
                        $count++;
                        $sumPercentage = $sumPercentage + $percentageEstablishment;
                    }
                }
            }
            $data['zero'] = $countZeroComplete;
            $data['one'] = $atLeastOneComplete;
            $data['all'] = $allComplete;
            $data['establishments_start_form'] = $count;
            $data['establishments_only_register'] = $establishments->count() - $count;
            $data['promPercentage'] = number_format($sumPercentage / $count, 0);

            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function getAllForExcel()
    {
        try {
            $data = Establishment::with([
                'forms',
                'establishmentType',
                'results.resultable',
                'provinceLocation',
                'cantonLocation',
                'locationParrish',
                'establishmentType'
            ])->has('results')->get();
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreEstablishmentRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function store(StoreEstablishmentRequest $request)
    {
        try {
            DB::beginTransaction();
            $establishment = Establishment::where('email', $request['email'])->first();
            if (!$establishment) {
                $cant = Establishment::get()->max('code');
                $data['code'] = str_pad($cant + 1, 5, "0", STR_PAD_LEFT);
            }
            $data['name'] = $request['name'];
            $data['email'] = $request['email'];
            $data['company'] = $request['company'] ?? '';
            Establishment::updateOrCreate(['email' => $data['email']], $data);
            DB::commit();
            return response()->json([
                'message' => "Successfully created",
                'success' => true,
            ], 200);
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * @param Establishment $establishment
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    private function createEstablishmentFormIntent(Establishment $establishment)
    {
        try {
            DB::beginTransaction();
            $formActive = Form::with(['components.subTopics.questions.children'])->active();
            if ($formActive) {
                $cantAttemps = $establishment->forms()->count();
                $establishment->forms()->attach($formActive->pluck('id'), ['attempts' => $cantAttemps + 1, 'is_finished' => false]);
                self::createResultsFormEstablishment($establishment, $formActive);
                DB::commit();
            } else {
                return response()->json([
                    'message' => "No hay un formulario activo",
                    'success' => true,
                ], 200);
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new \Exception($exception->getMessage());
        }
    }

    private function createResultsFormEstablishment(Establishment $establishment, Form $form)
    {
        try {
            DB::beginTransaction();
            $maxIntent = $establishment->forms()->max('attempts');
            $intentId = $establishment->forms()->where('attempts', $maxIntent)->first()->pivot->id;

            Results::create(
                [
                    'establishment_id' => $establishment->id,
                    'resultable_type' => Form::class,
                    'resultable_id' => $form->id,
                    'intent_id' => $intentId
                ]
            );
            foreach ($form->components()->get() as $component) {
                Results::create(
                    [
                        'establishment_id' => $establishment->id,
                        'resultable_type' => Component::class,
                        'resultable_id' => $component->id,
                        'intent_id' => $intentId
                    ]);
                foreach ($component->subTopics()->get() as $subTopic) {
                    Results::create(
                        [
                            'establishment_id' => $establishment->id,
                            'resultable_type' => SubTopic::class,
                            'resultable_id' => $subTopic->id,
                            'intent_id' => $intentId
                        ]);

                    foreach ($subTopic->questions()->where('answer_required', null)->get() as $question) {
                        if ($question->establishmentTypes()->count()) {
                            if (in_array($establishment->establishment_type_id, $question->establishmentTypes()->pluck('establishment_type_id')->toArray())) {
                                self::createQuestion($establishment->id, $question->id, $intentId);
                                foreach ($question->children()->get() as $child) {
                                    self::createQuestion($establishment->id, $child->id, $intentId);
                                }
                                foreach ($question->dependentQuestions()->get() as $item) {
                                    self::createQuestion($establishment->id, $item->id, $intentId);
                                    foreach ($item->children()->get() as $child) {
                                        self::createQuestion($establishment->id, $child->id, $intentId);
                                    }
                                }
                            }
                        } else {
                            self::createQuestion($establishment->id, $question->id, $intentId);
                            foreach ($question->children()->get() as $child) {
                                self::createQuestion($establishment->id, $child->id, $intentId);
                            }
                            foreach ($question->dependentQuestions()->get() as $item) {
                                self::createQuestion($establishment->id, $item->id, $intentId);
                                foreach ($item->children()->get() as $child) {
                                    self::createQuestion($establishment->id, $child->id, $intentId);
                                }
                            }
                        }
                    }
                }
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new \Exception($exception->getMessage());
        }
    }

    private function createQuestion($idEstablishment, $questionId, $intentId)
    {
        Results::create(
            [
                'establishment_id' => $idEstablishment,
                'resultable_type' => Question::class,
                'resultable_id' => $questionId,
                'intent_id' => $intentId
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Establishments\Establishment $Establishment
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function show($id)
    {
        try {
            $data = Establishment::with([
                'forms',
                'results' => function ($q) {
                    $q->whereIn('resultable_type', [Form::class, Component::class, SubTopic::class]);
                },
                'results.resultable',
                'locationParrish',
                'provinceLocation',
                'cantonLocation'
            ])->find($id);

            $questions = Establishment::with([
                'forms',
                'results' => function ($q) {
                    $q->where('resultable_type', Question::class);
                },
                'results.resultable' => function ($q) {
                    $q->where('has_score', 1)->where('code', '!=', null);
                },
                'locationParrish',
                'provinceLocation',
                'cantonLocation'
            ])->find($id);
            $data['questions'] = $questions;
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateEstablishmentRequest $request
     * @param \App\Models\Establishments\Establishment $Establishment
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function update(UpdateEstablishmentRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $data['establishment_type_id'] = $request['establishmentType'] ?? '';
            $data['ruc'] = $request['ruc'] ?? '';
            $data['type_of_taxpayer'] = $request['typeOfTaxpayer'] ?? '';
            $data['province'] = $request['province'] ?? '';
            $data['canton'] = $request['canton'] ?? '';
            $data['parrish'] = $request['parrish'] ?? '';
            $data['direction'] = $request['direction'] ?? '';
            $data['start_year_operations'] = $request['startYearOperations'] ?? '';
            $data['has_register_tourist'] = $request['hasRegisterTourist'] ?? '';
            $data['register_number'] = $request['registerNumber'] ?? '';
            $establishment = Establishment::find($id);
            $establishment->update($data);
            self::createEstablishmentFormIntent($establishment);
            DB::commit();
            return response()->json([
                'message' => "Successfully updated",
                'success' => true
            ], 200);
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Establishments\Establishment $Establishment
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            Establishment::find($id)->delete();
            DB::commit();
            return response()->json([
                'message' => "Successfully deleted",
                'success' => true
            ], 200);

        } catch (\Exception $exception) {
            DB::rollBack();
            throw new \Exception($exception->getMessage());
        }
    }

    public function showActiveEstablishmentForm($email)
    {
        try {
            $data = Establishment::with(['forms', 'establishmentType'])
                ->where('email', $email)
                ->first();
            $data['is_creating'] = true;
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * @throws \Exception
     */
    public function showActiveEstablishment($email)
    {
        try {
            $formActive = Form::where('status', Form::STATUS_ACTIVE)->first();
            $data = Establishment::with(
                [
                    'forms' => function ($q) use ($formActive) {
                        $q->where('form_id', $formActive->id);
                    },
                    'establishmentType'
                ])
                ->where('email', $email)
                ->first();
            $forms = $data->forms();
            $maxIntent = $forms->max('attempts');

            $idIntent = $forms->where('attempts', $maxIntent)->first()->pivot->id;
            $results = Results::with(['resultable'])
                ->where('establishment_id', $data->id)
                ->whereIn('resultable_type', [SubTopic::class, Component::class, Form::class])
                ->where('intent_id', $idIntent)
                ->get();
            $data['results'] = $results;
            $data['intent_id'] = $idIntent;
            $data['is_finished'] = $forms->where('attempts', $maxIntent)->first()->pivot->is_finished;;
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * @throws \Exception
     */
    public function chargeResultsToDownload($id)
    {
        try {
            $establishment = Establishment::find($id);
            $form = Results::with(['resultable'])
                ->where('establishment_id', $establishment->id)
                ->where('resultable_type', Form::class,)
                ->get();
            $components = Results::with(['resultable'])
                ->where('establishment_id', $establishment->id)
                ->where('resultable_type', Component::class)
                ->get();
            $subTopics = Results::with(['resultable'])
                ->where('establishment_id', $establishment->id)
                ->where('resultable_type', SubTopic::class)
                ->get();
            $questions = Results::where('establishment_id', $establishment->id)
                ->where('resultable_type', Question::class)
                ->with(
                    [
                        'resultable' => function ($q) {
                            $q->where('code', '!=', null);
                        }
                    ])
                ->get();
            $data['forms'] = $form;
            $data['components'] = $components;
            $data['subTopics'] = $subTopics;
            $data['questions'] = $questions;
            $data['establishment'] = $establishment;
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * @param $idEstablishment
     * @param $idIntent
     * @return JsonResponse
     * @throws \Exception
     */
    public function showPercentageForm($idEstablishment, $idIntent)
    {
        try {
            $formActive = Form::where('status', Form::STATUS_ACTIVE)->first();
            $components = $formActive->components;
            $subTopics = $components->pluck('subTopics')->collapse();
            $questions = $subTopics->pluck('questions')->collapse()->where('has_score', '!=', null)
                ->where('code', '!=', null);
            $questions = Results::where('resultable_type', Question::class)
                ->whereIn('resultable_id', $questions->pluck('id')->toArray())
                ->where('establishment_id', $idEstablishment)
                ->where('intent_id', $idIntent)->get();
            $questionsToCalcPercentage = [];
            $establishment=Establishment::find($idEstablishment);

            foreach ($questions as $item) {
                $ques = $item->resultable;
                if ($item->resultable->questionDependents()->count()) {
                    $dependentParent = $ques->questionDependents->first();
                    $answerDependentParent = Results::with(
                        ['resultable'])->where('resultable_type', Question::class)
                        ->where('resultable_id', $dependentParent->id)
                        ->where('establishment_id', $idEstablishment)
                        ->where('intent_id', $idIntent)->first();
                    if ($answerDependentParent) {
                        if ($ques->answer_required == 'positive' && $answerDependentParent->score > 0) {
                            array_push($questionsToCalcPercentage, $item);
                        } else if ($ques->answer_required == 'negative' && $answerDependentParent->score > 0) {
                            array_push($questionsToCalcPercentage, $item);
                        }
                    }
                } else {
                    array_push($questionsToCalcPercentage, $item);
                }
            }
            $questionsToCalcPercentage = collect($questionsToCalcPercentage);
            $number = count($questionsToCalcPercentage);
            $sumQuestionsWithScore = $questionsToCalcPercentage->where('score', '!=', null)->count();
            $percentage = 0;
            if ($number > 0) {
                $percentage = number_format($sumQuestionsWithScore / $number * 100, 2);
            }
            $data['percentage'] = $percentage;

            if ($establishment){
                $establishment->update(['progress'=>$percentage]);
            }

            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    public function showQuestionsOfSubTopic($subTopicResultId, $idEstablishment, $idIntent)
    {
        try {
            $subTopic = SubTopic::find($subTopicResultId);
            $questions = $subTopic->questions()->where('answer_required', null);
            $questions = Results::with(
                [
                    'resultable.questionDependents.results' => function ($q) use ($idEstablishment, $idIntent) {
                        $q->where('establishment_id', $idEstablishment)
                            ->where('intent_id', $idIntent);
                    },
                    'resultable.dependentQuestions.results' => function ($q) use ($idEstablishment, $idIntent) {
                        $q->where('establishment_id', $idEstablishment)
                            ->where('intent_id', $idIntent);
                    },
                    'resultable.dependentQuestions.results.resultable.dependentQuestions',
                    'resultable.dependentQuestions.results.resultable.children.results' => function ($q) use ($idEstablishment, $idIntent) {
                        $q->where('establishment_id', $idEstablishment)
                            ->where('intent_id', $idIntent);
                    },
                    'resultable.questionDependents.results.resultable.children.results' => function ($q) use ($idEstablishment, $idIntent) {
                        $q->where('establishment_id', $idEstablishment)
                            ->where('intent_id', $idIntent);
                    },
                    'resultable.dependentQuestions.results.resultable.children.results.resultable',
                    'resultable.questionDependents.results.resultable.questionDependents',
                    'resultable.questionDependents.results.resultable.children.results.resultable',
                    'resultable.children.results.resultable',
                    'resultable.children.results' => function ($q) use ($idEstablishment, $idIntent) {
                        $q->where('establishment_id', $idEstablishment)
                            ->where('intent_id', $idIntent);
                    }
                ])->where('resultable_type', Question::class)
                ->whereIn('resultable_id', $questions->pluck('id')->toArray())
                ->where('establishment_id', $idEstablishment)
                ->where('intent_id', $idIntent)->get();

            $data['questions'] = $questions;
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    public function showQuestionsOfSubTopicValidate($subTopicResultId, $idEstablishment, $idIntent)
    {
        try {
            $subTopic = SubTopic::find($subTopicResultId);
            $questions = $subTopic->questions()->where('code', '!=', null);
            $questionsR = Results::with(
                [
                    'resultable.questionDependents.results' => function ($q) use ($idEstablishment, $idIntent) {
                        $q->where('establishment_id', $idEstablishment)
                            ->where('intent_id', $idIntent);
                    },
                    'resultable.dependentQuestions.results' => function ($q) use ($idEstablishment, $idIntent) {
                        $q->where('establishment_id', $idEstablishment)
                            ->where('intent_id', $idIntent);
                    },
                    'resultable.dependentQuestions.results.resultable.dependentQuestions',
                    'resultable.questionDependents.results.resultable.questionDependents'
                ])->where('resultable_type', Question::class)
                ->whereIn('resultable_id', $questions->pluck('id')->toArray())
                ->where('establishment_id', $idEstablishment)
                ->where('intent_id', $idIntent)->get();

            $questionsToSend = [];
            foreach ($questionsR as $item) {
                $ques = $item->resultable;
                if ($item->resultable->questionDependents()->count()) {
                    $dependentParent = $ques->questionDependents->first();
                    $answerDependentParent = Results::with(
                        ['resultable'])->where('resultable_type', Question::class)
                        ->where('resultable_id', $dependentParent->id)
                        ->where('establishment_id', $idEstablishment)
                        ->where('intent_id', $idIntent)->first();
                    if ($answerDependentParent) {
                        if ($ques->answer_required == 'positive' && $answerDependentParent->score > 0) {
                            array_push($questionsToSend, $item);
                        } else if ($ques->answer_required == 'negative' && $answerDependentParent->score > 0) {
                            array_push($questionsToSend, $item);
                        }
                    }
                } else {
                    array_push($questionsToSend, $item);
                }
            }

            $data['questions'] = $questionsToSend;
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    public function showQuestionsResults($subTopicResultId, $idEstablishment, $idIntent)
    {
        try {
            $formActive = Form::with(['components.subTopics.questions'])->where('status', Form::STATUS_ACTIVE)->first();
            $components = $formActive->components;
            $subTopics = $components->pluck('subTopics')->collapse();
            $questions = $subTopics->pluck('questions')->collapse()->where('has_score', 1)
                ->where('code', '!=', null)->where('answer_required', null);
            $questions = Results::with(
                [
                    'resultable.subTopics'
                ])->where('resultable_type', Question::class)
                ->whereIn('resultable_id', $questions->pluck('id')->toArray())
                ->where('establishment_id', $idEstablishment)
                ->where('score', '<', 9.99)
                ->where('intent_id', $idIntent)->get();

            $data['questions'] = $questions;
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }


    /**
     * @param Establishment $establishment
     * @return void
     * @throws \Exception
     */
    public function updateIntent($id)
    {
        try {
            DB::beginTransaction();
            $formActive = Form::active();
            $establishment = Establishment::find($id);
            if ($establishment && $formActive && $establishment->progress>=100) {
                $forms = $establishment->forms();
                $maxIntent = $forms->max('attempts');
                $establishment->forms()->wherePivot('attempts', $maxIntent)->sync([$formActive->id => ['is_finished' => true]]);
            }
            self::completeMissingAnswers($establishment);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * @throws \Exception
     */
    public function completeMissingAnswers(Establishment $establishment){
        try {
            DB::beginTransaction();
            $forms = $establishment->forms();
            $maxIntent = $forms->max('attempts');
            if ($maxIntent){
                $percentage = $establishment->progress;
                if ($percentage >= 100) {
                    $results = $establishment->results;
                    if ($results) {
                        $results = $results->where('resultable_type', Question::class);
                        foreach ($results as $result) {
                            if ($result->resultable->type == 'rango_1_5' && $result->score == null) {
                                $result->score = 0;
                                $result->save();
                            } else if ($result->resultable->type == 'si_no' && $result->score == null) {
                                $result->score = 0;
                                $result->save();
                            }
                        }
                    }
                }
            }
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            throw new \Exception($exception->getMessage());
        }
    }
}
