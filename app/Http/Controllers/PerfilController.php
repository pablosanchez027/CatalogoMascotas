<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function edit() {
        $usuario = Auth::user();
        
        $argumentos = array();
        $argumentos['usuario'] = $usuario;

        return view('perfil.edit', $argumentos);
    }
}
