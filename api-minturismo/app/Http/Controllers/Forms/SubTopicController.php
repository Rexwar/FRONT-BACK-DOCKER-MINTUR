<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubTopicRequest;
use App\Http\Requests\UpdateSubTopicRequest;
use App\Models\Establishments\Results;
use App\Models\Forms\Component;
use App\Models\Forms\SubTopic;
use Illuminate\Support\Facades\DB;

class SubTopicController extends Controller
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
     * @throws \Exception
     */
    public function getAll()
    {
        try {
            $data = SubTopic::with(['component', 'questions.children'])->get();
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreSubTopicRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function store(StoreSubTopicRequest $request)
    {

        try {
            DB::beginTransaction();
            $data['code'] = $request['code'];
            $data['name'] = $request['name'];
            $data['description'] = $request['description'] ?? '';
            $data['result'] = $request['result'] ?? '';
            $data['component_id'] = $request['component_id'];
            $questions = $request['selectedQuestions'] ?? '';
            $subTopic = SubTopic::create($data);
            if ($questions) {
                $subTopic->questions()->sync($questions);
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
     * @param \App\Models\Forms\SubTopic $subTopic
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function show($id)
    {
        try {
            $data = SubTopic::with(['component', 'questions.children'])->find($id);
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateSubTopicRequest $request
     * @param \App\Models\Forms\SubTopic $subTopic
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateSubTopicRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $data['code'] = $request['code'];
            $data['name'] = $request['name'];
            $data['description'] = $request['description'] ?? '';
            $data['result'] = $request['result'] ?? '';
            $data['component_id'] = $request['component_id'];
            $questions = $request['selectedQuestions'];
            $subTopic = SubTopic::find($id);
            $subTopic->update($data);
            if ($questions) {
                $subTopic->questions()->sync($questions);
            } else {
                $subTopic->questions()->detach($subTopic->questions);
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
     * @param \App\Models\Forms\SubTopic $subTopic
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            SubTopic::find($id)->delete();
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
