<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\Prestacion;

class PrestacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $prestacion = Prestacion::with(['sede'])->get();

        return response()->json($prestacion);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestacion  $prestacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestacion $prestacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestacion  $prestacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestacion $prestacion)
    {
        //
    }
}
