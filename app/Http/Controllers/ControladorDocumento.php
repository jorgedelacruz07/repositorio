<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Documento;
use App\TipoDocumento;
use App\CursoPorProfesor;
use App\ExtensionDocumento;
use Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class ControladorDocumento extends Controller
{
	public function ver(){
		$documentos = Documento::all();

		// $id_usuarios = $documentos->id_usuario;
		// $usuarios = Usuario::where("id_usuario","=",$id_usuarios);
		
		// $usuarios = Usuario::all();

		$tipo_documentos = TipoDocumento::all();
		$cursoXprofesores = CursoPorProfesor::all();
		$extension_documentos = ExtensionDocumento::all();
		$ruta = "../storage/archivos/";

		return view("recientes")
		->with("documentos",$documentos)
		->with("tipo_documentos",$tipo_documentos)
		->with("cursoXprofesores",$cursoXprofesores)
		->with("extension_documentos",$extension_documentos)
		->with("ruta",$ruta);
	}

	public function subir(){
		// $usuarios = Usuario::all();
		$documentos = Documento::all();
		$tipo_documentos = TipoDocumento::all();
		$extension_documentos = ExtensionDocumento::all();
		$cantidad_documentos = count($documentos);
		if($cantidad_documentos>0){
			return view("subir")
			// ->with("usuarios", $usuarios)
			->with("documentos", $documentos)
			->with("tipo_documentos",$tipo_documentos)
			->with("extension_documentos",$extension_documentos);
		}else{
			return view("mensajeRechazo")->with("msj","Dicho usuario no existe o ha sido eliminado");
		}
	}

	public function agregar(Request $request){
		$archivo = $request->file("direccion_archivo");
		$nombre_archivo = $archivo->getClientOriginalName();
		
		$document = Documento::all();
		$cantidad_documentos = count($document)+1;

		$documento = new Documento;
		$documento->id_documento = $cantidad_documentos;
		$documento->fecha_subida = date("d/m/y");
		$documento->estado_doc = 0;
		$documento->direccion_archivo = $nombre_archivo;
		$documento->votos_favor = 0;
		$documento->votos_contra = 0;
		$documento->id_usuario = '13200049';
		$documento->id_cursoXprof = $request->input("");
		$documento->id_tipo_doc = $request->input("id_tipo_doc");
		$documento->id_extension_doc = $request->input("id_extension_doc");
		
		\Storage::disk('local')->put($nombre_archivo,  \File::get($archivo));

		$result= $documento->save();
		if($result){
			return view("mensajeCorrecto")->with("msj","Publicación agregada correctamente");
		}else{
			return view("mensajeRechazo")->with("msj","Hubo un error al agregar documento");
		}
	}

	public function descargar($id){
		$documento = Documento::where("id_documento","=",$id)->first();
		$url = $documento->direccion_archivo;
		$ruta = "../storage/archivos/".$url;
		return response()->download($ruta);
	}
}