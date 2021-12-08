<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primarykey = 'id';

    protected $fillable = [
        "nombres", "apellidos", "correoE", "contrasena","telefono","edad","direccion"
    ];

}
