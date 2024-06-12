<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\producto;
use App\Models\subcategoria;

class FilterController extends Controller
{
    //
    public function index($nombreCategoria)
    {
        $categories = categoria::all();
        $idCategoria = '';

        for ($i = 0; $i < count($categories); $i++) {
            if ($categories[$i]['nombre'] == $nombreCategoria) {
                $idCategoria = $categories[$i]['id'];
            }
        }

        $products = producto::where('idCategoria', $idCategoria)->get();

        foreach ($products as $product) {
            $imagenes = json_decode($product->imagenes);
            $product->primerImagen = $imagenes[0];
        }

        $subcategories = subcategoria::where('idCategoria', $idCategoria)->get();

        return view('filter', compact('categories', 'nombreCategoria', 'products', 'subcategories'));
    }
}
