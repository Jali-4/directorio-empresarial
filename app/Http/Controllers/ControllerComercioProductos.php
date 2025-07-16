<?php

namespace App\Http\Controllers;

use App\Models\Comercio;
use App\Models\Producto;
use Illuminate\Http\Request;

class ControllerComercioProductos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $comercios = Comercio::with('productos')->get();
        // $categorias = Categoria::all();

        return view('categoria.comercio.productos', compact('comercios'));
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comercio = Comercio::with('productos')->findOrFail($id);

        return view('categoria.comercio.productos', compact('comercio'));
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
