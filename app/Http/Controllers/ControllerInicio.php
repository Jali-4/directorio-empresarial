<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Comercio;
use App\Models\Slider;
use Illuminate\Http\Request;

class ControllerInicio extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comercios = Comercio::orderBy('fecha_creacion', 'desc')->take(3)->get();
        //$comercios = Comercio::all();
        $categorias = Categoria::all();
        $data = Slider::all();

        return view('inicio.indexInicio', compact('comercios', 'categorias','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
