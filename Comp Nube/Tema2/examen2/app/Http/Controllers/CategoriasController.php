<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias; 

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Categorias::where('status', 1)
            ->orderBy('id')
            ->get();
        return view('categorias.index')->with('categorias', $categorias);
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $datos = $request->all();
        Categorias::create($datos);
        return redirect('/categorias');
    }

    public function show($id)
    {
        $categoria = Categorias::find($id);
        return view('categorias.read')->with('categoria', $categoria);
    }

    public function edit($id)
    {
        $categoria = Categorias::find($id);
        return view('categorias.edit')->with('categoria', $categoria);
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $categoria = Categorias::find($id);
        $categoria->update($datos);
        return redirect('/categorias');
    }

    public function destroy($id)
    {
        $categoria = Categorias::find($id);
        $categoria->status = 0;
        $categoria->save();
        return redirect('/categorias');
    }
}
