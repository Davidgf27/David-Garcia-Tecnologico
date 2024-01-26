<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    protected $table = 'peliculas';

    protected $fillable = ['titulo','foto','id_genero','id_clasific','status'];

    public function generos()
    {
        return $this->belongsTo('App\Models\Generos', 'id_genero', 'id');
    }

    public function clasificaciones()
    {
        return $this->belongsTo('App\Models\Clasificaciones', 'id_clasific', 'id');
    }

}
