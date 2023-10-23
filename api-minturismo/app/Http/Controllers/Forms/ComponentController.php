<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComponentRequest;
use App\Http\Requests\UpdateComponentRequest;
use App\Models\Forms\Component;
use App\Models\Forms\Form;
use Illuminate\Support\Facades\DB;

class ComponentController extends Controller
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
            $data = Component::with(['subTopics', 'forms'])->get();
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreComponentRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function store(StoreComponentRequest $request)
    {
        try {
            DB::beginTransaction();
            $data['code'] = $request['code'];
            $data['name'] = $request['name'];
            $data['description'] = $request['description'];
            Component::create($data);
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
     * @param \App\Models\Forms\Component $component
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function show($id)
    {
        try {
            $data = Component::find($id);
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateComponentRequest $request
     * @param \App\Models\Forms\Component $component
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function update(UpdateComponentRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $data['code'] = $request['code'];
            $data['name'] = $request['name'];
            $data['description'] = $request['description'];
            Component::find($id)->update($data);
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
     * @param \App\Models\Forms\Component $component
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            Component::find($id)->delete();
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
