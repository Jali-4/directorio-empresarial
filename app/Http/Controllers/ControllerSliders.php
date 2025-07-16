<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class ControllerSliders extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::all();
        return view('dashboardAdmin.carousel.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardAdmin.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'imagen' => 'required|image|max:2048'

        ], [
            'imagen.image' => 'El archivo debe ser una imagen.',
            'imagen.max' => 'La imagen no puede ser mayor de 2MB.',
        ]);

        $slider = new Slider();

        $slider->titulo = $request->titulo;
        $slider->descripcion = $request->descripcion;

        $archivo = $request->file('imagen');
        $url = 'imgs/slider/';
        $nombre_arch = time() . '-' . $archivo->getClientOriginalName();
        $mover_img = $request->file('imagen')->move($url, $nombre_arch);

        $slider->imagen = $url . $nombre_arch;

        $slider->enlace = $request->enlace;

        $slider->save();

        return redirect()->route('slider.index');
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
        $slider = Slider::find($id);
        return view('dashboardAdmin.carousel.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->titulo = $request->input('titulo');

        $archivo = $request->file('imagen');
        $url = 'imgs/slider/';
        $nombre_arch = time() . '-' . $archivo->getClientOriginalName();
        $mover_img = $request->file('imagen')->move($url, $nombre_arch);

        $slider->imagen = $url . $nombre_arch;

        $slider->enlace = $request->input('enlace');
        $slider->descripcion = $request->input('descripcion');
        
        $slider->save();

        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);
        $ruta = $slider->imagen;
        unlink($ruta);

        $slider->delete();

        return redirect()->route('slider.index');
    }
}