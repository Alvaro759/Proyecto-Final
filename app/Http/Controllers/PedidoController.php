<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\factura;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function showPago()
    {

        $user = Auth::user();
        $direcciones = $user->direcciones;
        
        return view('pago', compact('direcciones'));
    }

    public function processPago(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'numero_tarjeta' => 'required|digits:16',
            'expiracion' => 'required|date_format:m/y',
            'cvv' => 'required|digits:3',
            'direccion_id' => 'required|exists:direcciones,id',
        ]);

        $factura = new Factura();
        $factura->nombre = $request->nombre;
        $factura->idUsuario = Auth::id();
        $factura->idDireccion = $request->direccion_id;
        $factura->save();

        return redirect('/')->with('success', 'Pedido realizado correctamente.');
    }
}
