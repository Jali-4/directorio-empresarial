<?php

namespace App\Http\Controllers;

use App\Models\ImagenProducto;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerImagenesProducto extends Controller
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
        // $request->validate([
        //     'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // // Guardar la imagen del producto en el sistema de archivos
        // $imagenProducto = new ImagenProducto();
        // $imagenProducto->id_producto = $id_producto;

        // $imagePath = $request->file('imagen')->store('productos', 'public');
        // $imagenProducto->ruta_imagen = $imagePath;

        // $imagenProducto->save();

        // return back()->with('success', 'Imagen del producto guardada exitosamente');
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
    
        $producto = Producto::findOrFail($id);
    
        // Guardar cada imagen recibida
        foreach ($request->file('imagenes') as $imagen) {
            $imagenPath = $imagen->store('productos', 'public');
    
            // Crear una nueva instancia de ImagenProducto y guardar la ruta
            $imagenProducto = new ImagenProducto();
            $imagenProducto->id_producto = $producto->id_producto;
            $imagenProducto->ruta_imagen = $imagenPath;
            $imagenProducto->save();
        }
    
        return back()->with('success', 'Imágenes subidas correctamente.');
    }
    
 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imagenProducto = ImagenProducto::findOrFail($id);
        Storage::disk('public')->delete($imagenProducto->ruta_imagen);
        $imagenProducto->delete();
    
        return back()->with('success', 'Imagen eliminada correctamente.');
    }
}
