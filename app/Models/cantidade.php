<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cantidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'idPedido',
        'idProducto',
        'cantidad',
    ];
}
