<?php

namespace App\Http\Controllers;

use App\Models\CentrosComputo;
use App\Http\Requests\StoreCentrosComputoRequest;
use App\Http\Requests\UpdateCentrosComputoRequest;


class CentrosComputoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(CentrosComputo::all(), 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCentrosComputoRequest $request)
    {
        return response()->json(CentrosComputo::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(CentrosComputo $centros_computo)
    {
        return response()->json($centros_computo,200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCentrosComputoRequest $request, CentrosComputo $centros_computo)
    {
        return  response()->json($centros_computo->update($request->all()),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CentrosComputo $centros_computo)
    {
        return  response()->json($centros_computo->delete(),200);
    }
}
