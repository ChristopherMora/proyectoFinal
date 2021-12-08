<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $primarykey = 'id';

    protected $fillable = [
        "nombreP", "cantidad", "talla", "precio","color"
    ];

    public $timestamps = false;
}
