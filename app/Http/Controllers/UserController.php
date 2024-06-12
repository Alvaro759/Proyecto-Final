<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\categoria;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = user::all();
        $categories = categoria::all();
        return view('users.index', compact('usuarios', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id' => 'nullable',
            'nombre' => 'nullable',
            'email' => 'nullable',
            'admin' => 'integer',
        ]);
        $usuario = user::find($id);
        $usuario->update($request->all());
        return redirect()->back()->with('success', 'Modificación realizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = user::find($id);

        $usuario->delete();

        return redirect()->route('users.index')
            ->with('success', 'Usuario borrado correctamente');
    }

    public function edit($id)
    {
        $usuario = user::find($id);
        $categories = categoria::all();

        return view('users.edit', compact('usuario', 'categories'));
    }
}
