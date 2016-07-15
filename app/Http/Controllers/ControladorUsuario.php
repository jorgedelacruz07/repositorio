<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Curso;
use App\EapAlumno;
use App\Area;
use App\PlanEstudios;
use App\Departamento;
use App\Alumno;
use App\Sexo;

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
		$sexos = Sexo::all();
		return view('registro')
		->with('sexos',$sexos)
		->with('eap_alumnos',$eap_alumnos)
		->with('departamentos',$departamentos);
	}
	
	public function postregistro(Request $request){
		$usuario = new Usuario();
		$alumno = new Alumno();

		$usuario->id_usuario = $request->input('id_usuario');
		$usuario->nombre_usuario = $request->input('nombre_usuario');
		$usuario->apellidos_usuario = $request->input('apellidos_usuario');
		$usuario->password = $request->input('password');
		$usuario->fecha_creacion = date('y/m/d/h/i/s');
		$usuario->id_sexo = $request->input('id_sexo');
		$usuario->id_estado_usuario = 'A';
		$usuario->id_tipo_usuario = 'A';

		$alumno->id_usuario = $request->input('id_usuario');
		$alumno->id_eap = '10.2';
		$alumno->telef_contacto = '000000000';
		$alumno->email = $request->input('email');
		$alumno->dir_fotografia = $request->input('dir_fotografia');
		$alumno->nivel = '1';
		$alumno->puntos_alumno = '0';
		$alumno->numero_faltas = '0';
		$alumno->direccion_actual = 'Hola mundo	';
		$alumno->ubigeo_distrito = '150103';
		$alumno->save();

		if($usuario->save()){
			if($alumno->save()){
				return view('login')
				->with('$usuario');
			}else{
				return view("mensajeRechazo")->with("msj","Hubo un error al agregar alumno");
			}
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
