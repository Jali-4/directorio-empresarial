<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Comercio;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerComercios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comercios = Comercio::all();
        $productos = Producto::all();
        $query = '';
        

        return view("inicio.indexComercios", compact('comercios', 'productos', 'query'));
    }

    public function index_inicio_comercio()
    {
        $comercios = Comercio::orderBy('id_comercio', 'desc')->take(3)->get();
        $productos = Producto::all();
        $categorias = Categoria::all();
        $query = '';

        return view("inicio.indexInicio", compact('comercios', 'productos', 'categorias', 'query'));
    }

    public function buscar(Request $request)
    {
        $query = $request->input('query');

        // Buscar comercios
        $comercios = Comercio::where('nombre', 'LIKE', "%{$query}%")
            ->orWhere('descripcion', 'LIKE', "%{$query}%")
            ->get();

        // Buscar productos
        $productos = Producto::where('nombre', 'LIKE', "%{$query}%")
            ->orWhere('descripcion', 'LIKE', "%{$query}%")
            ->get();

        return view('inicio.indexComercios', compact('comercios', 'productos', 'query'));
    }

    public function informacion($id)
    {
        $comercio = Comercio::find($id);
    
        if (!$comercio) {
            return redirect()->route('comercios.index')->with('error', 'Comercio no encontrado.');
        }
    
        // Obtener la categoría del comercio
        $categoria = $comercio->categorias()->first();
    
        return view("categoria.comercio.informacion", compact('comercio', 'categoria'));
    }

    public function galeria($id)
    {
        $comercio = Comercio::with('imagenes')->find($id);
        if (!$comercio) {
            return redirect()->route('comercios.index')->with('error', 'Comercio no encontrado.');
        }

        $categoria = $comercio->categorias()->first();

        return view("categoria.comercio.galeria", compact('comercio', 'categoria'));
    }

    public function productos(string $id)
    {
        $comercio = Comercio::with('productos')->find($id);
        if (!$comercio) {
            return redirect()->route('comercios.index')->with('error', 'Comercio no encontrado.');
        }

        $categoria = $comercio->categorias()->first();

        return view('categoria.comercio.productos', compact('comercio', 'categoria'));
    }

    public function editarIn()
    {
        $user = Auth::user();
        $comercio = Comercio::where('id_usuario', $user->id)->first();

        $productos = $comercio->productos;

        return view('dashboardClient.edit', compact('user', 'comercio', 'productos'));
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
