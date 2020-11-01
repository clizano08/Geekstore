<?php

namespace App\Http\Controllers;

use App\Models\TypeDeliverie;
use Illuminate\Http\Request;

class TypeDeliverieController extends Controller
{
    public function typedeliverie()
    {

        try {
            //Listar los Productos activos
            $typeDeliverie = TypeDeliverie::all();
            $response = $typeDeliverie;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeDeliverie  $typeDeliverie
     * @return \Illuminate\Http\Response
     */
    public function show(TypeDeliverie $typeDeliverie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeDeliverie  $typeDeliverie
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeDeliverie $typeDeliverie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeDeliverie  $typeDeliverie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeDeliverie $typeDeliverie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeDeliverie  $typeDeliverie
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeDeliverie $typeDeliverie)
    {
        //
    }
}
