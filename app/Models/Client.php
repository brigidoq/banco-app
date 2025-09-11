<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //usar fillable para asignacion masiva
    //usar tabla clients
    protected $table = 'clients';
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'genero',
        'empresa',
        'dpi',
        'direccion',
        'ciudad',
        'pais',
    ];
}
