<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;

    protected $table = 'ventas';
    protected $primarykey = 'id';

    protected $fillable = [
        "nombresV", "apellidosV", "telefonoV", "productosT","precioT"
    ];

    public $timestamps = false;
}
