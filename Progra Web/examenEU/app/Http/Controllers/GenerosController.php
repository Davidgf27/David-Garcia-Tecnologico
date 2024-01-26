<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generos;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generos = Generos::where('status', 1)
        ->orderBy('nombre')->get();

        return view('generos.index')
        ->with('generos', $generos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('generos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Generos::create($datos);
        return redirect('/generos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genero = Generos::find($id);
        return view('Generos.read')->with('genero', $genero);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genero = Generos::find($id);
        return view('Generos.edit')->with('genero', $genero);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $generos = Generos::find($id);
        $generos->update($datos);
        return redirect('/generos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genero = Generos::find($id);
        $genero->status = 0;
        $genero->save();

        return redirect('/generos');
    }
}
