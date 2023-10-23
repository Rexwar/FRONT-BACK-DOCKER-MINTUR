<?php

namespace App\Http\Controllers\Establishments;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateResultsRequest;
use App\Jobs\UpdateQuestionParent;
use App\Models\Establishments\Establishment;
use App\Models\Establishments\Results;
use Illuminate\Support\Facades\DB;

class ResultsController extends Controller
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
                'update',
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
            $results = Results::with([
                'resultable',
                'establishment.establishmentType',
                'establishment.provinceLocation',
                'establishment.cantonLocation',
                'establishment.locationParrish',
            ])->get();

            return response()->json($results, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateResultsRequest $request
     * @param \App\Models\Establishments\Results $results
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function update(UpdateResultsRequest $request, $id)
    {
        //
        try {
            DB::beginTransaction();
            if ($request['establishment']) {
                $establishment = Establishment::with(['forms'])->find($request['establishment']);
                $maxIntent = $establishment->forms()->max('attempts');
                $idIntent = $establishment->forms()->where('attempts', $maxIntent)->first()->pivot->id;
            }
            if ($request['type'] == 'relacionada') {
                if (is_array($request['ids'])) {
                    Results::whereIn('resultable_id', $request['ids'])
                        ->where('resultable_type', $request['model'])
                        ->where('establishment_id', $establishment->id)
                        ->where('intent_id', $idIntent)->update(['score' => 1]);
                    $resultParent = Results::with(['resultable'])->find($id);
                    if ($resultParent) {
                        if ($resultParent->resultable->children) {
                            $children = $resultParent->resultable->children->pluck('id')->toArray();
                            if ($children) {
                                Results::whereIn('resultable_id', array_diff($children, $request['ids']))
                                    ->where('resultable_type', $request['model'])
                                    ->where('establishment_id', $establishment->id)
                                    ->where('intent_id', $idIntent)->update(['score' => 0]);
                            }
                        }
                    }
                }
                UpdateQuestionParent::dispatch($resultParent);
            }

            if ($request['type'] == 'una_opcion') {
                $result = Results::with(['resultable'])
                    ->where('resultable_id', $id)
                    ->where('resultable_type', $request['model'])
                    ->where('establishment_id', $establishment->id)
                    ->where('intent_id', $idIntent)->first();
                $data['score'] = $request['score'];
                $result->score = $data['score'];
                $result->update($data);
            }

            if ($request['type'] == 'frecuencia_actualizacion') {
                $result = Results::find($id);
                $data['score'] = $request['score'];
                $result->score = $data['score'];
                $result->update($data);
                if ($result->resultable->parent()->count()) {
                    $parent = $result->resultable->parent()->first();
                    $parentResult = Results::where('resultable_id', $parent->id)
                        ->where('resultable_type', $request['model'])
                        ->where('establishment_id', $establishment->id)
                        ->where('intent_id', $idIntent)->first();
                    $parentResult->score = 10;
                    $parentResult->save();
                }
            }

            if ($request['type'] == 'si_no' || $request['type'] == 'rango_1_5') {
                $result = Results::find($id);
                $data['score'] = $request['score'];
                $result->update($data);
                if ($result->resultable->parent()->count()) {
                    $parent = $result->resultable->parent()->first();
                    $idsChildren = $parent->children()->pluck('id')->toArray();
                    $resultsChildren = Results::whereIn('resultable_id', $idsChildren)
                        ->where('resultable_type', $request['model'])
                        ->where('establishment_id', $establishment->id)
                        ->where('intent_id', $idIntent)->get();
                    $sumScore = $resultsChildren->where('score', '!=', Results::NO_APPLY)->sum('score');
                    $countChildren = $resultsChildren->where('score', '!=', 'No Aplica')->count();
                    $scoreParent = 0;
                    if ($request['type'] == 'si_no') {
                        $scoreParent = $sumScore * 100 / ($countChildren);
                    }
                    if ($request['type'] == 'rango_1_5') {
                        $scoreParent = $sumScore * 100 / ($countChildren * 5);
                    }
                    $parentResult = Results::where('resultable_id', $parent->id)
                        ->where('resultable_type', $request['model'])
                        ->where('establishment_id', $establishment->id)
                        ->where('intent_id', $idIntent)->first();
                    $parentResult->score = $scoreParent;
                    $parentResult->save();
                }
            }

            if ($request['type'] == 'informativa') {
                $result = Results::find($id);
                $data['answer'] = $request['score'];
                $data['score'] = 100;
                $result->update($data);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new \Exception($exception->getMessage());
        }
    }

}
