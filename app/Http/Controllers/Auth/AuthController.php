<?php

namespace App\Http\Controllers\Auth;
use App\Usuario;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    public function __construct(Guard $auth){
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    protected function getLogin(){
        return view("login");
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'id_usuario' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('id_usuario', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember'))){
            $usuario_actual=\Auth::usuario();
            return view('perfil')->with("usuario",  $usuario_actual);
        }else{
            return "Credenciales incorrectas";
        }
    }

    protected function getRegister(){
        return view("registro");
    }

    protected function postRegister(Request $request){
        $this->validate($request, [
            'id_usuario' => 'required',
            'nombre_usuario' => 'required',
            'password' => 'required',
            ]);
        $data = $request;

        $usuarios = Usuario::all();
        $cantidad_usuarios = count($usuarios);
        
        $usuario = new Usuario;
        $usuario->id_usuario = $cantidad_usuarios;
        $usuario->nombre_usuario = $data[""];
        $usuario->apellidos_usuarios = $data[""];
        $usuario->password = bcrypt($data["password"]);
        $usuario->fecha_creacion = $data[""];
        $usuario->id_usuario = $data[""];
        $usuario->id_estado_usuario = $data[""];
        $usuario->id_tipo_usuario = $data[""];

        if($usuario->save()){
            return "se ha registrado correctamente el usuario";
        }
        return view("login");
    }

    protected function getLogout(){
        $this->auth->logout();
        Session::flush();
        return redirect('login');
    }
}
