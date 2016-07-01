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
		$password = $request->password;
		$usuario = Usuario::where('id_usuario','=',$id_usuario)->first();
		$ruta = "../storage/fotos/";
		return view("perfil")
		->with("usuario",$usuario)
		->with("ruta",$ruta);
	}

	public function cursos(){
		$usuarios = Usuario::all();
		return view("cursos")->with("usuarios",$usuarios);
	}
}
