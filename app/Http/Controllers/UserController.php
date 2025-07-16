<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Comercio;
use App\Models\ComercioCategoria;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   
    public function dashboard(){
        $user = Auth::user();
        $comercio = Comercio::where('id_usuario', $user->id)->first();
        
        return view('dashboardClient.index',compact('user','comercio'));
    }

    public function edit()
    {
        $user = Auth::user();
        $comercio = Comercio::where('id_usuario', $user->id)->first();
        $productos = $comercio->productos;
        $categorias = Categoria::all();
        $comercioCategorias = $comercio->categorias->pluck('id_categoria')->toArray();

        return view('dashboardClient.edit', compact('comercio', 'productos', 'categorias', 'comercioCategorias'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $comercio = Comercio::where('id_usuario', $user->id)->first();
    
        $productos = $comercio->productos;
    
        $comercio->nombre = $request->input('nombre');
        $comercio->direccion = $request->input('direccion');
        $comercio->direccion_map = $request->input('direccion_map');
        $comercio->telefono = $request->input('telefono');
        $comercio->correo = $request->input('correo');
        $comercio->facebook = $request->input('facebook');
        $comercio->instagram = $request->input('instagram');
        $comercio->descripcion = $request->input('descripcion');
    
        if ($request->hasFile('imagen_destacada')) {
            $file = $request->file('imagen_destacada');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $comercio->imagen_destacada = 'images/' . $filename;
        }
    
        $comercio->save();

        ComercioCategoria::where('id_comercio', $comercio->id_comercio)->delete();
        foreach ($request->input('categorias', []) as $categoriaId) {
            ComercioCategoria::create([
                'id_comercio' => $comercio->id_comercio,
                'id_categoria' => $categoriaId,
            ]);
        }
    
        return redirect()->route('edit')->with('success', 'Comercio actualizado correctamente.');
    }
    



}