<?php

namespace App\Http\Controllers;

use App\Models\Deliverymen;
use Illuminate\Http\Request;

class DeliverymenController extends Controller
{


    public function deliverymenActive()
    {

        try {
            //Listar los deliveryman activos
            $deliverymen = Deliverymen::where('active', true)->with(['vehicle'])->orderBy('vehicle_id', 'asc')->get();
            $response = $deliverymen;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }
    public function deliverymenInactive()
    {

        try {
            //Listar los deliveryman inactivos
            $deliverymen = Deliverymen::where('active', false)->with(['vehicle'])->orderBy('vehicle_id', 'asc')->get();
            $response = $deliverymen;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }
    public function deliverymenByID($id)
    {
        try {
            //Obtener un deliveryman
            $deliverymen = Deliverymen::where('id', $id)->with(['vehicle'])->first();
            $response = $deliverymen;
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
     * @param  \App\Models\Deliverymen  $deliverymen
     * @return \Illuminate\Http\Response
     */
    public function show(Deliverymen $deliverymen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deliverymen  $deliverymen
     * @return \Illuminate\Http\Response
     */
    public function edit(Deliverymen $deliverymen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deliverymen  $deliverymen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deliverymen $deliverymen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deliverymen  $deliverymen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deliverymen $deliverymen)
    {
        //
    }
}
