<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\direccione;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PerfilController extends Controller
{
    //
    public function index()
    {
        $categories = categoria::all();

        $idUsuario = Auth::id();
        $direccion = direccione::where('idUser', $idUsuario)->first();

        return view('perfil', compact('categories', 'direccion'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'nullable|min:8|confirmed',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->back()->with('status', 'Perfil actualizado correctamente.');
    }

    public function updateDireccion(Request $request)
    {
        $request->validate([
            'calle' => 'required|string',
            'numero' => 'required|integer',
            'codigoPostal' => 'required|integer|min:5',
            'provincia' => 'required|string'
        ]);

        $direccion = direccione::where('idUser', Auth::id())->first();

        if ($direccion) {
            $direccion->calle = $request->calle;
            $direccion->numero = $request->numero;
            $direccion->codigoPostal = $request->codigoPostal;
            $direccion->provincia = $request->provincia;

            $direccion->save();

            return redirect()->back()->with('status', 'Dirección actualizada correctamente.');
        } else {
            return redirect()->back()->with('error', 'No se encontró una dirección para este usuario.');
        }
    }

    public function saveDireccion(Request $request)
    {
        $request->validate([
            'calle' => 'required|string',
            'numero' => 'required|integer',
            'codigoPostal' => 'required|integer|min:5',
            'provincia' => 'required|string'
        ]);

        $direccion = new direccione();
        $direccion->idUser = Auth::id();
        $direccion->calle = $request->calle;
        $direccion->numero = $request->numero;
        $direccion->codigoPostal = $request->codigoPostal;
        $direccion->provincia = $request->provincia;

        $direccion->save();

        return redirect()->back()->with('status', 'Dirección guardada correctamente.');
    }
}
