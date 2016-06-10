<?php

namespace App\Http\Controllers;

use App\Usuario;

use Illuminate\Http\Request;

use App\Http\Requests;

class ControladorUsuario extends Controller
{
    public function index(){
    	return view("login");
	}

    public function login(Request $request){
        $id_usuario = $request->id_usuario;
        $usuario = Usuario::where('id_usuario','=',$id_usuario)->first();
        return view("perfil", ["usuario"=>$usuario]);
    }
}
