<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Comercio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerCategorias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Categoria::all();
        return view('dashboardAdmin.categorias.index', compact('data'));
    }

    public function categoria($id = null)
{
    $categorias = Categoria::withCount('comercios')->get();

    if ($id) {
        $categoria = Categoria::findOrFail($id);
        $comercios = $categoria->comercios;
        return view("categoria.comercio.categoria", compact('comercios', 'categorias', 'categoria'));
    } else {
        $comercios = Comercio::all();
        return view("categoria.comercio.categoria", compact('comercios', 'categorias'));
    }
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardAdmin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255|unique:categorias,nombre',
            'imagen_destacada' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $categoria = new Categoria();
        $categoria->nombre = $validatedData['nombre'];

        if ($request->hasFile('imagen_destacada')) {
            $imagePath = $request->file('imagen_destacada')->store('categorias', 'public');
            $categoria->imagen_destacada = $imagePath;
        }

        $categoria->save();

        return redirect()->route('categorias.index')->with('success', 'Categoría creada exitosamente');
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
        $categoria = Categoria::findOrFail($id);

        return view('dashboardAdmin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255|unique:categorias,nombre,' . $id . ',id_categoria',
            'imagen_destacada' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $categoria = Categoria::findOrFail($id);
        $categoria->nombre = $validatedData['nombre'];

        if ($request->input('imagen_destacada_eliminar') == '1') {
            if ($categoria->imagen_destacada) {
                Storage::disk('public')->delete($categoria->imagen_destacada);
                $categoria->imagen_destacada = null;
            }
        } elseif ($request->hasFile('imagen_destacada')) {
            if ($categoria->imagen_destacada) {
                Storage::disk('public')->delete($categoria->imagen_destacada);
            }
            $imagePath = $request->file('imagen_destacada')->store('categorias', 'public');
            $categoria->imagen_destacada = $imagePath;
        }

        $categoria->save();

        return redirect()->route('categorias.index')->with('success', 'Categoría actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);

        if ($categoria->imagen_destacada) {
            Storage::disk('public')->delete($categoria->imagen_destacada);
        }

        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada exitosamente');
    }
}
