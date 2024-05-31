<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class CarritoController extends Controller
{
    //
    public function index(){
        $categories = categoria::all();
        
        return view('carrito', compact('categories'));
    }
}
