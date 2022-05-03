<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $fillable = [
        'evento_id',
        'nombre',
        'email',
        'celular',
        'institucion',
        'nivelFormacion',
    ];
}
