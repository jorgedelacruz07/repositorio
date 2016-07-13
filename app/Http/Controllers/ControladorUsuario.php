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
				return redirect('login')
				->with("msj","Contraseña inválida");
			}
		}else{
			return redirect('login')
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
		->with("msj", "")
		->with("areas", $areas)
		->with("eap_alumnos",$eap_alumnos);
	}

	public function registrar(Request $request){
		$usuario = new Usuario();
		$usuario->id_usuario = 0;
		$usuario->nombre_usuario = 0;
		$usuario->apellidos_usuario = 0;
		$usuario->password = 0;
		$usuario->fecha_creacion = 0;
		$usuario->id_sexo = 0;
		
		$usuario->save();
		return view('login')
		->with('$usuario');
	}
}
