<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clasificaciones;

class ClasificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clasificaciones = Clasificaciones::where('status', 1)
        ->orderBy('nombre')->get();

        return view('clasificaciones.index')
        ->with('clasificaciones', $clasificaciones);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clasificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
       Clasificaciones::create($datos);
        return redirect('/clasificaciones');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $clasificacion = Clasificaciones::find($id);
        return view('Clasificaciones.read')->with('clasificacion', $clasificacion);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clasificacion = Clasificaciones::find($id);
        return view('Clasificaciones.edit')->with('clasificacion', $clasificacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $clasificaciones = Clasificaciones::find($id);
        $clasificaciones->update($datos);
        return redirect('/clasificaciones');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clasificacion = Clasificaciones::find($id);
        $clasificacion->status = 0;
        $clasificacion->save();

        return redirect('/clasificaciones');
    }
}
