<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos extends Model
{
    protected $table = 'juegos';

    protected $fillable = ['id_categoria', 'id_plataforma', 'nombre', 'imagen', 'status'];

    public function categorias()
    {
        return $this->belongsTo('App\Models\Categorias', 'id_categoria', 'id');
    }

    public function plataformas()
    {
        return $this->belongsTo('App\Models\Plataformas', 'id_plataforma', 'id');
    }

    // Puedes definir relaciones con otros modelos aquí si es necesario
}