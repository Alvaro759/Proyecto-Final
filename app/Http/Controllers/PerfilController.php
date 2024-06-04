<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

class PerfilController extends Controller
{
    //
    public function index(){
        $categories = categoria::all();


        return view('perfil', compact('categories'));
    }
}
