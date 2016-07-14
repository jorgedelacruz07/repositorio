<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Curso;
use App\EapAlumno;
use App\Area;
use App\PlanEstudios;
use App\Departamento;

use Illuminate\Http\Request;

use App\Http\Requests;

class ControladorUsuario extends Controller
{
	public function getlogin(){
		return view("login")
		->with("msj","");
	}

	public function postlogin(Request $request){
		$id_usuario = $request->id_usuario;
		$password = $request->password;
		$ruta = "../public/rsc/fotos/";
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

	public function getregistro(){
		$eap_alumnos = EapAlumno::all();
		$departamentos = Departamento::all();
		return view('registro')
		->with('eap_alumnos',$eap_alumnos)
		->with('departamentos',$departamentos);
	}
	
	public function postregistro(Request $request){
		$usuario = new Usuario();
		$alumno = new Alumno();
		$data = $request;

		$usuario->id_usuario = $data['id_usuario'];
		$usuario->nombre_usuario = $data['nombre_usuario'];
		$usuario->apellidos_usuario = $data['apellidos_usuario'];
		$usuario->password = bcrypt($data['password']);
		$usuario->fecha_creacion = date('y/m/d/h/i/s');
		$usuario->id_sexo = $data['id_sexo'];
		$usuario->id_estado_usuario = 'A';
		$usuario->id_tipo_usuario = 'A';

		if($usuario->save()){
			return view('login')
			->with('$usuario');
		}else{
			return view("mensajeRechazo")->with("msj","Hubo un error al agregar usuario");
		}
	}
	
	public function busqueda(){
		$usuarios = Usuario::all();
		$cursos = Curso::all();
		$areas = Area::all();
		$eap_alumnos = EapAlumno::all();
		$plan_estudioss = PlanEstudios::all();
		return view("busqueda")
		->with("msj", "")
		->with("areas", $areas)
		->with("eap_alumnos",$eap_alumnos);
	}


}
