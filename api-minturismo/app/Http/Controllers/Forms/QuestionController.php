<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Forms\Form;
use App\Models\Forms\Question;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAll()
    {
        try {
            $data = Question::with(['children', 'questionDependents', 'dependentQuestions', 'establishmentTypes','results'])
                ->whereNull('parent_id')->get();
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }


    public function getQuestionsFromFormActive()
    {
        try {
            $formActive = Form::with(['components.subTopics.questions.children'])->active();
            $components = $formActive->components;
            $subTopics = $components->pluck('subTopics')->collapse();
            $questions = $subTopics->pluck('questions')->collapse();
            $data = [];
            $data['components'] = $components;
            $data['subTopics'] = $subTopics;
            $data['questions'] = $questions;
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreQuestionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreQuestionRequest $request)
    {
        try {
            DB::beginTransaction();
            $data['code'] = $request['code'];
            $data['name'] = $request['name'];
            $data['type'] = $request['type'];
            $data['children_type'] = $request['children_type'] ?? null;
            $data['description'] = $request['description'] ?? null;
            $data['max_score'] = $request['max_score'] ?? null;
            $data['importance'] = $request['importance'] ?? null;
            $data['verification_means'] = $request['verificationMeans'] ?? null;
            $data['has_score'] = $request['hasScore'] ?? null;
            $data['answer_required'] = $request['answerRequired'] ?? null;
            $question = Question::create($data);
            if ($request['questionsRelated']) {
                foreach ($request['questionsRelated'] as $q) {
                    $q['parent_id'] = $question->id;
                    $q['type'] = $data['children_type'];
                    Question::create($q);
                }
            }
            if ($request['establishmentTypes']) {
                $question->establishmentTypes()->sync($request['establishmentTypes']);
            }
            if ($request['dependents']) {
                $question->questionDependents()->sync($request['dependents']);
            }
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
     * Display the specified resource.
     *
     * @param \App\Models\Forms\Question $Question
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        try {
            $data = Question::with(['children', 'dependentQuestions', 'questionDependents', 'establishmentTypes'])->find($id);
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateQuestionRequest $request
     * @param \App\Models\Forms\Question $Question
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateQuestionRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $data['code'] = $request['code'];
            $data['name'] = $request['name'];
            $data['type'] = $request['type'];
            $data['children_type'] = $request['children_type'] ?? null;
            $data['description'] = $request['description'] ?? null;
            $data['max_score'] = $request['max_score'] ?? null;
            $data['importance'] = $request['importance'] ?? null;
            $data['verification_means'] = $request['verificationMeans'] ?? null;
            $data['has_score'] = $request['hasScore'] ?? null;
            $data['answer_required'] = $request['answerRequired'] ?? null;
            $question = Question::find($id);
            $question->update($data);
            if ($request['establishmentTypes']) {
                $question->establishmentTypes()->sync($request['establishmentTypes']);
            } else if (!$request['establishmentTypes']) {
                $idsToDetach = $question->establishmentTypes()->pluck('establishment_type_id')->toArray();
                if ($idsToDetach) {
                    $question->establishmentTypes()->detach($idsToDetach);
                }
            }
            if ($request['dependents']) {
                $question->questionDependents()->sync($request['dependents']);
            } else if (!$request['dependents']) {
                $idsToDetachQ = $question->questionDependents()->pluck('dependent_id')->toArray();
                if ($idsToDetachQ) {
                    $question->questionDependents()->detach($idsToDetachQ);
                }
            }

            if ($request['questionsRelated']) {
                $ids = [];
                foreach ($request['questionsRelated'] as $q) {
                    $q['parent_id'] = $question->id;
                    $q['type'] = $data['children_type'];
                    $qRelated = Question::updateOrCreate(['parent_id' => $q['parent_id'], 'name' => $q['name']], $q);
                    array_push($ids, $qRelated->id);
                }
                $questionsRelatedToBeDeleted = Question::whereNotIn('id', $ids)->where('parent_id', $question->id)->get();
                $questionsRelatedToBeDeleted->each->delete();
            }
            if ($data['type'] == 'relacionada' && !$request['questionsRelated']) {
                $questionsRelatedToBeDeleted = Question::where('parent_id', $question->id)->get();
                $questionsRelatedToBeDeleted->each->delete();
            }
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
     * @param \App\Models\Questions\Question $Question
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $res = Question::find($id)->delete();
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
}
