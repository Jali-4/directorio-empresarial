<?php

namespace App\Http\Controllers;

use App\Models\Comercio;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ControllerProductos extends Controller
{
 
    public function index()
    {
        $productos = Producto::all();

        return view('categoria.comercio.producto', compact('productos'));
    }

    public function create()
    {
        $user = Auth::user();
        $comercio = Comercio::where('id_usuario', $user->id)->first();
        return view('dashboardClient.productos.create', compact('user', 'comercio'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'precio' => 'required|numeric',
            'descripcion' => 'nullable|string',
        ]);
    
        $user = Auth::user();
        $comercio = Comercio::where('id_usuario', $user->id)->firstOrFail();
    
        $producto = new Producto();
        $producto->id_comercio = $comercio->id_comercio;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
    

        $producto->save();
    
        return redirect()->route('edit');  
    }


    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);
        $comercio = $producto->comercio; 
    
        return view('categoria.comercio.producto', compact('producto', 'comercio'));
    }

    public function edit($id)
{
    $user = Auth::user();
    $comercio = Comercio::where('id_usuario', $user->id)->first();
    $producto = Producto::findOrFail($id); // Buscar el producto por su ID

    return view('dashboardClient.productos.edit', compact('comercio', 'producto'));
}

    public function update(Request $request, string $id)
    {

        $request->validate([
            'nombre' => 'required|string|max:100',
            'precio' => 'required|numeric',
            'descripcion' => 'nullable|string',
            'imagen_destacada' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $producto = Producto::findOrFail($id);
    
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;

        if ($request->input('delete_image') === 'true' && $producto->imagen_destacada) {
            Storage::disk('public')->delete($producto->imagen_destacada);
            $producto->imagen_destacada = null;
        }
    
          // Paso 3: Manejo de la imagen destacada
          if ($request->hasFile('imagen_destacada')) {
            // Eliminar la imagen existente si hay una
            if ($producto->imagen_destacada) {
                Storage::disk('public')->delete($producto->imagen_destacada);
            }

            // Guardar la nueva imagen
            $imagePath = $request->file('imagen_destacada')->store('productos', 'public');
            $producto->imagen_destacada = $imagePath;
        }

        
    
        $producto->save();
    
        return redirect()->route('edit')->with('success', 'Categoría actualizada exitosamente');
    }

    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);

        if ($producto->imagen_destacada) {
            Storage::disk('public')->delete($producto->imagen_destacada);
        }
    
        $producto->delete();
    
        return back()->with('success', 'Producto eliminado exitosamente');
    }
}
