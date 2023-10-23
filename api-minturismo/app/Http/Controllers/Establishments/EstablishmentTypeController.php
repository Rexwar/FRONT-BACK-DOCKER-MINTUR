<?php

namespace App\Http\Controllers\Establishments;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEstablishmentTypeRequest;
use App\Http\Requests\UpdateEstablishmentTypeRequest;
use App\Models\Establishments\EstablishmentType;

class EstablishmentTypeController extends Controller
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
            $data = EstablishmentType::with(['establishments'])->get();
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }
}
