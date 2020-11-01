<?php

namespace App\Http\Controllers;

use App\Models\OrderHeader;
use Illuminate\Http\Request;

class OrderHeaderController extends Controller
{

    public function orderActive()
    {

        try {
            //Listar los ordenes activos
            $order = OrderHeader::where('status', true)->with(['user','deliverymen', 'typedeliverie','orderdetail'])->orderBy('id', 'asc')->get();
            $response = $order;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }
    public function orderInactive()
    {

        try {
            //Listar los Productos inactivos
            $order = OrderHeader::where('status', false)->with(['user', 'deliverymen','typedeliverie', 'orderdetail'])->orderBy('id', 'asc')->get();
            $response = $order;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }
    public function orderByID($id)
    {
        try {
            //Obtener un Producto
            $order = OrderHeader::where('id', $id)->with(['user', 'deliverymen','typedeliverie', 'orderdetail'])->first();
            $response = $order;
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
     * @param  \App\Models\OrderHeader  $orderHeader
     * @return \Illuminate\Http\Response
     */
    public function show(OrderHeader $orderHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderHeader  $orderHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderHeader $orderHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderHeader  $orderHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderHeader $orderHeader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderHeader  $orderHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderHeader $orderHeader)
    {
    }
}
