<?php

namespace App\Http\Controllers;

use App\Models\Clasification;
use Illuminate\Http\Request;

class ClasificationController extends Controller
{
    public function clasification()
    {

        try {
            //Listar los Productos activos
            $clasification = Clasification::all();
            $response = $clasification;
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
     * @param  \App\Models\Clasification  $clasification
     * @return \Illuminate\Http\Response
     */
    public function show(Clasification $clasification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clasification  $clasification
     * @return \Illuminate\Http\Response
     */
    public function edit(Clasification $clasification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clasification  $clasification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clasification $clasification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clasification  $clasification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clasification $clasification)
    {
        //
    }
}
