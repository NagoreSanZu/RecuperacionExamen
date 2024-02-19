<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manzanas extends Model
{
    //COGEMOS LA TABLA DE LA BASE DE DATOSS
    protected $table = 'manzanas';
    use HasFactory;

    protected $fillable=[
        'tipoManzana','precioKilo' 
    ];
}
