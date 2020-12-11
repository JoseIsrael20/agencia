<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
     protected $fillable = [
      'nombre',
      'tmesa',
      'nmesa',
      'precio',
      'platillo',
      'fecha',
      'hora',
      'telefono'

    ];
}
