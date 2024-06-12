<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;
use App\Models\producto;

class PanelController extends Controller
{
   /**
     * Muestra todos los categorias.
     */
    public function index()
    {
        $categories = categoria::all();
        $products = producto::all();
        return view('panel.index', compact('products', 'categories'));
    }

     /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = categoria::all();
        $product = producto::find($id);

        return view('panel.show', compact('categories', 'product'));
    }

    /**
     * Edit the product
     */
    public function edit($id)
    {
        $categories = categoria::all();
        $product = producto::find($id);

        return view('panel.edit', compact('categories', 'product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = producto::find($id);

        $product->delete();

        return redirect()->route('panel.index')
            ->with('success', 'Producto borrado correctamente');
    }

     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string',
            'caracteristicas' => 'required|string',
            'precio' => 'required|decimal:1,2',
            'imagenes' => 'required|string',
            'destacado' => 'required|boolean',
            'idCategoria' => 'required|integer'
        ]);

        $product = producto::find($id);
        $product->update($request->all());

        return back()->with('success', 'Modificación realizada');
    }

    /**
     * Crea un nuevo producto.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'caracteristicas' => 'required',
            'precio' => 'required|decimal:1,2',
            'imagenes' => 'required|string',
            'destacado' => 'required|boolean',
            'idCategoria' => 'required|integer'
        ]);
        producto::create($request->all());

        return redirect()->back()->with('success', 'Producto creado correctamente.');
    }

    public function create()
    {
        $categories = categoria::all();

        return view('panel.create', compact('categories'));
    }
}
