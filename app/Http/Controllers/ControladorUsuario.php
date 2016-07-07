<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Curso;
use App\EapAlumno;
use App\Area;
use App\PlanEstudios;

use Illuminate\Http\Request;

use App\Http\Requests;

class ControladorUsuario extends Controller
{
	public function index(){
		return view("login")
		->with("msj","");
	}

	public function login(Request $request){
		$id_usuario = $request->id_usuario;
		$password = $request->password;
		$ruta = "../storage/fotos/";
		$usuario = Usuario::where('id_usuario','=',$id_usuario)->first();
		if($usuario){
			if($usuario->password == $password){
				return view("perfil")
				->with("usuario",$usuario)
				->with("ruta",$ruta);
			}else{
				return view('login')
				->with("msj","Contraseña inválida");
			}
		}else{
			return view('login')
			->with("msj","Usuario inválido");
		}
	}

	public function cursos(){
		$usuarios = Usuario::all();
		$cursos = Curso::all();
		$areas = Area::all();
		$eap_alumnos = EapAlumno::all();
		$plan_estudioss = PlanEstudios::all();
		return view("cursos")
		// ->with("plan_estudioss", $plan_estudioss)
		->with("eap_alumnos",$eap_alumnos);
	}

	public function registrar(Request $request){
		
	}
}
