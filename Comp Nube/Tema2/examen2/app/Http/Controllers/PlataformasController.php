<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plataformas; 
class PlataformasController extends Controller
{
    public function index()
    {
        $plataformas = Plataformas::where('status', 1)
            ->orderBy('id')
            ->get();
        return view('plataformas.index')->with('plataformas', $plataformas);
    }

    public function create()
    {
        return view('plataformas.create');
    }

    public function store(Request $request)
    {
        $datos = $request->all();
        Plataformas::create($datos);
        return redirect('/plataformas');
    }

    public function show($id)
    {
        $plataforma = Plataformas::find($id);
        return view('plataformas.read')->with('plataforma', $plataforma);
    }

    public function edit($id)
    {
        $plataforma = Plataformas::find($id);
        return view('plataformas.edit')->with('plataforma', $plataforma);
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $plataforma = Plataformas::find($id);
        $plataforma->update($datos);
        return redirect('/plataformas');
    }

    public function destroy($id)
    {
        $plataforma = Plataformas::find($id);
        $plataforma->status = 0;
        $plataforma->save();
        return redirect('/plataformas');
    }
}
