<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DateTime;

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
    public function update(Request $request, $id) {
        $usuario = User::find($id);
        

        if ($usuario) {
            $usuario->name = $request->input('nombre');
            if($request->hasFile('foto')) {
                $archivo = $request->file('foto');
                $nombreArchivo = 'p' . $usuario->id . '.' . date("Y-m-d") . '.';
                //$archivo->getClientoriginalName()

                $request->file('foto')->storeAs('public', $nombreArchivo);
            }


            if($usuario->save()) {
                return redirect()->route('perfil.edit')->with('exito','Perfil actualizado');
            }
        }
        return redirect()->route('perfil.edit')->with('error','No se pudo actualizar usuario');
    }
}
