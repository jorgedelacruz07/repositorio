<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Documento;
use App\TipoDocumento;
use App\CursoPorProfesor;
use App\ExtensionDocumento;
use App\EapAlumno;
use App\Area;
use Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class ControladorDocumento extends Controller
{
	public function ver(){
		$documentos = Documento::all();
		$ruta = "rsc/archivos/";
		return view("documentos")
		->with("documentos",$documentos)
		->with("ruta",$ruta);
	}

	public function archivo($id){
		$documento = Documento::where('id_documento',$id)->first();
		$ruta = "../rsc/archivos/";
		return view("documento")
		->with("documento",$documento)
		->with("ruta",$ruta);
	}

	public function tipo($id){
		$documentos = Documento::where('id_tipo_doc',$id)->get();
		$ruta = "../../rsc/archivos/";
		return view("documentos")
		->with("documentos",$documentos)
		->with("ruta",$ruta);
	}

	public function curso($id){
		$eap_alumnos = EapAlumno::all();
		$areas = Area::all();
		$cursoxprofe = CursoPorProfesor::where('id_curso',$id)->first();
		if($cursoxprofe){
			$documentos = Documento::where('id_cursoXprof',$cursoxprofe->id_cursoXprof)->get();
			$ruta = "../../rsc/archivos/";
			if($documentos){
				return view("documentos")
				->with("documentos",$documentos)
				->with("ruta",$ruta);
			}else{
				return redirect('cursos')
				->with("msj","No se encontraron documentos")
				->with("areas", $areas)
				->with("eap_alumnos",$eap_alumnos);
			}
		}else{
			return redirect('cursos')
			->with("msj", "No existe")
			->with("areas", $areas)
			->with("eap_alumnos",$eap_alumnos);
		}
		return redirect('cursos')
		->with('msj', 'Estamos teniendo inconvenientes')
		->with("areas", $areas)
		->with('eap_alumnos',$eap_alumnos);
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
		
		// $tipo_documento = TipoDocumento::where("nombre_tipo_doc",$request->tipo_documento)->first();
		// $extension_documento = ExtensionDocumento::where("nombre_extension_doc",$request->extension_documento)->first();
		// $id_tipo_doc = $tipo_documento->id_tipo_doc;
		// $id_extension_doc = $extension_documento->id_extension_doc;

		$document = Documento::all();
		$cantidad_documentos = count($document)+1;

		$documento = new Documento;
		$documento->id_documento = $cantidad_documentos;
		$documento->fecha_subida = date("y/m/d/h/i/s");
		$documento->estado_doc = 0;
		$documento->direccion_archivo = $nombre_archivo;
		$documento->votos_favor = 0;
		$documento->votos_contra = 0;
		$documento->id_usuario = '13200049';
		$documento->id_cursoXprof = $request->input("");
		$documento->id_tipo_doc = $request->input("");
		$documento->id_extension_doc = $request->input("");
		
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
		$ruta = "rsc/archivos/".$url;
		return response()->download($ruta);
	}
}