<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::where('status', 1)
        ->orderBy('id')->get();
    return view('peliculas.index')->with('pelicula', $pelicula)
    ->with('peliculas', $peliculass);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generos = Generos::select('id','nombre')
                  ->orderBy('nombre')->get();
        $clasificaciones = Clasificaciones::select('id','nombre')
                  ->orderBy('nombre')->get();

        return view('Peliculas.create')
                ->with('generos',$generos)
                ->with('clasificaciones',$clasificaciones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Peliculas::create($datos);
        return redirect('/peliculas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelicula = Peliculas::find($id);
        return view('Peliculas.read')->with('pelicula', $pelicula);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelicula = Peliculas::find($id);
        $generos = Generos::select('id','nombre')
                  ->orderBy('nombre')->get();
        $clasificaciones = Clasificaciones::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Peliculas.edit')
               ->with('pelicula', $pelicula)
               ->with('generos',$generos)
               ->with('clasificaciones',$clasificaciones);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $pelicula = Peliculas::find($id);
        $pelicula->update($datos);
        return redirect('/peliculas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelicula = Peliculas::find($id);
        $pelicula->status = 0;
        $pelicula->save();
        return redirect('/peliculas');
    }
}
