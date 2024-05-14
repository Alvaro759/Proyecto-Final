<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perteneciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'idProducto', 
        'idCategoria',
    ];
}
