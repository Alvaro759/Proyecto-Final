<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\producto;

class ProductController extends Controller
{
    //
    public function index($nombreCategoria, $nombreProducto){

        $categories = categoria::all();
        $idCategoria = null;

        foreach ($categories as $category) {
            if ($category->nombre === $nombreCategoria) {
                $idCategoria = $category->id;
                break;
            }
        }

        $product = producto::where('nombre', $nombreProducto)
                           ->where('idCategoria', $idCategoria)
                           ->firstOrFail();
        
        $product->imagenes = json_decode($product->imagenes);

        $product->caracteristicas = explode(',', $product->caracteristicas);

        return view('product', compact('categories', 'nombreCategoria', 'nombreProducto', 'product'));
    }
}
