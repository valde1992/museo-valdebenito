<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable=[
        'nombre',
        'apellido',
        'cuit_cuil',
        'domicilio',
        'telefono',
        'email',
        'fecha_carga',
    ];
    
     public $timestamps = false;
}
