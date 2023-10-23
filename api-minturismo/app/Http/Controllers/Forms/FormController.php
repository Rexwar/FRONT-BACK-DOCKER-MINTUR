<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;
use App\Models\Forms\Form;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:api', ['except' =>
        //     [
        //         'showActiveForm',
        //     ]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAll()
    {
        try {
            $data = Form::with(['components'])->get();
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreFormRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreFormRequest $request)
    {
        try {
            DB::beginTransaction();
            $data['code'] = $request['code'];
            $data['name'] = $request['name'];
            $data['description'] = $request['description'];
            $data['status'] = $request['status'] ?? null;
            $components = $request['selectedComponents'] ?? '';
            $form = Form::create($data);
            if ($components) {
                $form->components()->sync($components);
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
     * @param \App\Models\Forms\Form $form
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        try {
            $data = Form::with(['components.subTopics.questions'])->find($id);
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateFormRequest $request
     * @param \App\Models\Forms\Form $form
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateFormRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $data['code'] = $request['code'];
            $data['name'] = $request['name'];
            $data['description'] = $request['description'];
            $data['status'] = $request['status'] ?? null;
            $components = $request['selectedComponents'] ?? '';
            $form = Form::find($id);
            $form->update($data);
            if ($components) {
                $form->components()->sync($components);
            } else {
                $form->components()->detach($form->components);
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
     * @param \App\Models\Forms\Form $form
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            Form::find($id)->delete();
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

    public function showActiveForm()
    {
        try {
            $data = Form::with(['components.subTopics.questions.children'])
                ->where('status', Form::STATUS_ACTIVE)
                ->first();
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }
}
