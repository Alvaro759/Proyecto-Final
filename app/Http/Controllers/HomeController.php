<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\producto;

class HomeController extends Controller
{
    //
    public function index()
    {

        $categories = categoria::all();
        $products = producto::where('destacado', 1)->take(3)->get();

        foreach ($products as $product) {
            $product->nombreCategoria = categoria::where('id', $product->idCategoria)->first()->nombre;
            $imagenes = json_decode($product->imagenes);
            $product->primerImagen = $imagenes[0];
        }

        return view('home', compact('categories', 'products'));
    }
}
