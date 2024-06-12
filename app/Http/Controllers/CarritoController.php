<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\producto;
use App\Models\carrito;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    //
    public function index()
    {
        $categories = categoria::all();

        $idUser = Auth::id();
        $articulos = carrito::where('idUsuario', $idUser)->with('product')->get();

        $totalCarrito = 0;
        $finalTotal = 0;

        foreach ($articulos as $articulo) {
            $imagenes = json_decode($articulo->product->imagenes);
            $articulo->imagen = $imagenes[0];

            $precioTotalProducto = $articulo->product->precio * $articulo->Cantidad;
            $totalCarrito += $precioTotalProducto;
        }

        return view('carrito', compact('categories', 'articulos', 'totalCarrito', 'finalTotal'));
    }

    public function addCarrito(Request $request)
    {
        $product = producto::find($request->product_id);

        if (!$product) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        };


        $cartItem = carrito::where('idUsuario', Auth::id())
            ->where('idProducto', $product->id)
            ->first();

        if ($cartItem) {
            $cartItem->update(['Cantidad' => $cartItem->Cantidad + 1]);
        } else {
            carrito::create([
                'idUsuario' => Auth::id(),
                'idProducto' => $product->id,
                'Cantidad' => 1
            ]);
        }

        return redirect()->back()->with('success', 'Producto añadido al carrito');
    }

    public function removeCarrito(Request $request)
    {

        $product = producto::find($request->product_id);

        $cartItem = carrito::where('idUsuario', Auth::id())
            ->where('idProducto', $product->id)
            ->first();

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->back()->with('success', 'Producto eliminado del carrito.');
        } else {
            return redirect()->back()->with('error', 'El producto no se encuentra en el carrito.');
        }
    }

    public function comprarYa(Request $request)
    {
        $product = producto::find($request->product_id);

        if (!$product) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        };

        return redirect()->route('home')->with('success', 'Compra realizada con éxito.');
    }
}
