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

    public function filtrar(Request $request, $nombreCategoria)
    {
        $categories = categoria::all();

        $categoria = categoria::where('nombre', $nombreCategoria)->firstOrFail();
        $idCategoria = $categoria->id;

        $subcategories = subcategoria::where('idCategoria', $idCategoria)->get();

        $productosQuery = producto::where('idCategoria', $idCategoria);

        if ($request->filled('subcategorias')) {
            $subcategoriasSeleccionadas = $request->input('subcategorias');
            $productosQuery->whereIn('id', function ($query) use ($subcategoriasSeleccionadas) {
                $query->select('idProducto')
                      ->from('pertenecientes')
                      ->whereIn('idSubcategoria', $subcategoriasSeleccionadas);
            });
        }

        $products = $productosQuery->get();

        foreach ($products as $product) {
            $imagenes = json_decode($product->imagenes);
            $product->primerImagen = $imagenes[0];
        }

        return view('filter', compact('categories', 'nombreCategoria', 'subcategories', 'products'));
    }
}
