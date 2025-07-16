<?php

namespace App\Http\Controllers;

use App\Models\Comercio;
use App\Models\ImagenComercio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerImagenesComercio extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'imagenes.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $comercio = Comercio::findOrFail($id);
    
        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                $imagenPath = $imagen->store('comercios', 'public');
    
                // Crear una nueva instancia de ImagenComercio y guardar la ruta
                $imagenComercio = new ImagenComercio();
                $imagenComercio->id_comercio = $comercio->id_comercio;
                $imagenComercio->ruta_img = $imagenPath;
                $imagenComercio->save();
            }
        } else {
            return back()->withErrors(['imagenes' => 'No se ha recibido ninguna imagen.']);
        }
    
        return back()->with('success', 'Imágenes subidas correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imagenComercio = ImagenComercio::findOrFail($id);
        Storage::disk('public')->delete($imagenComercio->ruta_img);
        $imagenComercio->delete();
    
        return back()->with('success', 'Imagen eliminada correctamente.');
    }
}
