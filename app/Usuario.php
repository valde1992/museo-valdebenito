<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable=[
        'persona_id',
        'nombre_usuario',
        'password',
    ];
    
     public $timestamps = false;
}
