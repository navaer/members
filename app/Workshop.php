<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $fillable = [
        'member_id',
        'mi_camino',
        'mi_fundamento',
        'mi_negocio',
        'mi_empleo',
        'mi_educacion'
    ];
}
