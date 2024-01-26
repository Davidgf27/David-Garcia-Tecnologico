<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificaciones extends Model
{
    protected $table = 'clasificaciones';

    protected $fillable = ['nombre','status'];
}
