<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCatalogGeographicClassifierRequest;
use App\Http\Requests\UpdateCatalogGeographicClassifierRequest;
use App\Models\Establishments\Establishment;
use App\Models\Forms\CatalogGeographicClassifier;

class CatalogGeographicClassifierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function getAll()
    {
        try {
            $data = CatalogGeographicClassifier::with(['children', 'parent'])->get();
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
    public function getAllProvinces()
    {
        try {
            $data = CatalogGeographicClassifier::with(['establishments'])
                ->where('type','PROVINCE')->get();
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }
}
