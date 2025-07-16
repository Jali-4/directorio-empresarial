<?php

namespace App\Http\Controllers;

use App\Models\Comercio;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerWebmaster extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('dashboardAdmin.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardAdmin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new User();

        $item->name = $request->nombre;
        $item->email = $request->email;
        $item->password = $request->contrasena;
        $item->save();


        $comercio = new Comercio();
        
        $comercio->nombre = $request->nombre;        
        $comercio->id_usuario = $item->id;
        $comercio->fecha_creacion = Carbon::now();

        $comercio->save();


        return redirect()->route('dashboardAdmin.usuarios.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $item = User::find($id);
        return view('dashboardAdmin.usuarios.edit', compact('item')); 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $item = User::find($id);
        return view('dashboardAdmin.usuarios.edit', compact('item')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->name=$request->input('nombre');
        $usuario->email=$request->input('email');
        $usuario->password=$request->input('contrasena');
        $usuario->save();
        return redirect()->route('dashboardAdmin.usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = User::find($id);
        $item->delete();

        return redirect()->route('dashboardAdmin.usuarios.index');
    }    
    
    public function mostrarUsuarios()
    {
        $user = Auth::user();
        $data = User::all();
        return view('dashboardAdmin.usuarios.index', compact('data','user'));
    }
}
