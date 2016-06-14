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
		$direccion_archivo = "../storage/archivos/";

		return view("recientes")
		->with("documentos",$documentos)
		->with("tipo_documentos",$tipo_documentos)
		->with("cursoXprofesores",$cursoXprofesores)
		->with("extension_documentos",$extension_documentos)
		->with("direccion_archivo",$direccion_archivo);
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
			->with("extension_documentos",$extension_documentos)
			->with("cantidad_documentos", $cantidad_documentos);
		}else{
			return view("mensajeRechazo")->with("msj","Dicho usuario no existe o ha sido eliminado");
		}
	}

	public function agregar(Request $request){
		$archivo = $request->file("direccion_archivo");
		$input  = array('direccion_archivo' => $archivo);
		$reglas = array('direccion_archivo' => 'required|mimes:pdf|max:50000');
		$validacion = Validator::make($input, $reglas);
		if ($validacion->fails()){
			return view("mensajeRechazo")->with("msj","El archivo no es pdf o es muy grande");
		}else{
			$documento = new Documento;
			$documento->id_documento = $request->input("cantidad_documentos");
			$documento->fecha_subida = $request->input("fecha_subida");
			$documento->estado_doc = $request->input("estado_doc");
			// $documento->direccion_archivo = $request->input("direccion_archivo");
			$documento->votos_favor = $request->input("votos_favor");
			$documento->votos_contra = $request->input("votos_contra");
			$documento->id_usuario = $request->input("");
			$documento->id_cursoXprof = $request->input("");
			$documento->id_tipo_doc = $request->input("id_tipo_doc");
			$documento->id_extension_doc = $request->input("id_extension_doc");
			
			$carpeta = $request->input("cantidad_documentos");
			$ruta=$carpeta."/".$request->input("id_usuario")."_".$archivo->getClientOriginalName();
			$r1=Storage::disk('archivos')->put($ruta,\File::get($archivo));
			$documento->direccion_archivo=$ruta;
			
			$result= $documento->save();
			if($result){
				return view("mensajeCorrecto")->with("msj","Publicación agregada correctamente");
			}else{
				return view("mensajeRechazo")->with("msj","Hubo un error al agregar documento");
			}
		}
	}

	// public function descargar($id){
	public function descargar(){
		// $documento = Documento::find($id);
		// $url = $documento->direccion_archivo;
		// return response()->download($url);
		return response()->download("D:/repositorio/evaluaciones/examenparcial.pdf");
	}
}