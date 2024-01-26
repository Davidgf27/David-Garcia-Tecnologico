<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Juegos; 
use App\Models\Plataformas; 
use App\Models\Categorias;

class JuegosController extends Controller
{
    public function index()
    {
        $juegos = Juegos::with('plataformas', 'categorias')
        ->where('status', 1)
        ->orderBy('id_plataforma')
        ->orderBy('id_categoria')
        ->orderBy('id')->get();
    
    return view('juegos.index')
        ->with('juegos', $juegos);
    }

    public function create()
    {
        $plataformas = Plataformas::select('id', 'nombre')
                ->orderBy('nombre')->get();
        $categorias = Categorias::select('id', 'nombre')
                ->orderBy('nombre')->get(); 
        $juegos = Juegos::where('status', 1)
                ->orderBy('id');    
        return view('juegos.create')
            ->with('plataformas', $plataformas) // Corregido aquí
            ->with('juegos', $juegos)
            ->with('categorias', $categorias);
    }

    public function store(Request $request)
    {
        $datos = $request->all();
        $hora = date("h:i:s");
        $fecha = date("d-m-Y");
        $prefijo = $fecha."_".$hora;

        $archivo = $request->file('imagen');

        $nombre_foto = $archivo->getClientOriginalName();

        $rl = Storage::disk('fotografias')->put($nombre_foto, \File::get($archivo));

        /*if($rl)
        {
            $datos['imagen'] = $nombre_foto;
            _juegos::create($datos);
            return redirect('/_juegos');
        } else
        {
            return 'Error al intentar guardar la foto <br/><br/><a href="../public/_juegos">
            REGRESAR A LAS FOTOS DE LOS PRODUCTOS</a>';
        }*/

        $datos['imagen'] = $nombre_foto;
            Juegos::create($datos);
            return redirect('/juegos');
    }

    public function show($id)
    {
        $juego = Juegos::find($id);
        return view('juegos.read')->with('juego', $juego);
    }

    public function edit($id)
    {
        $juego = Juegos::find($id);
        $plataforma = Plataformas::select('id','nombre')
                  ->orderBy('id')->get();
        $categoria = Categorias::select('id','nombre')
                  ->orderBy('id')->get();           
        return view('juegos.edit')
                ->with('juegos', $juego)
                ->with('plataformas',$plataforma)
                ->with('categorias',$categoria);
        
        
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $juego = Juegos::find($id);
        $juego->update($datos);
        return redirect('/juegos');
    }

    public function destroy($id)
    {
        $juego = Juegos::find($id);
        $juego->status = 0;
        $juego->save();
        return redirect('/juegos');
    }
}
