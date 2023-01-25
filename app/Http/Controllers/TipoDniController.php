<?php

namespace App\Http\Controllers;

use App\Models\tipo_dni;
use Illuminate\Http\Request;

class TipoDniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // mostrar todos los tipo de dni
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // crea un dni 
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
    // guarda en la db el dni creado
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_dni  $tipo_dni
     * @return \Illuminate\Http\Response
     */
    // muestra un dni especifico
    public function show(tipo_dni $tipo_dni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_dni  $tipo_dni
     * @return \Illuminate\Http\Response
     */
    // muestra la vista para editar un dni
    public function edit(tipo_dni $tipo_dni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipo_dni  $tipo_dni
     * @return \Illuminate\Http\Response
     */
    // actualiza un dni
    public function update(Request $request, tipo_dni $tipo_dni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_dni  $tipo_dni
     * @return \Illuminate\Http\Response
     */
    // elimina un dni
    public function destroy(tipo_dni $tipo_dni)
    {
        //
    }
}
