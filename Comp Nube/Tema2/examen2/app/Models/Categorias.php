<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['nombre', 'status'];

    // Puedes definir relaciones con otros modelos aquí si es necesario
}
