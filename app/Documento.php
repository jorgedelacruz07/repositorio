<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
	public function usuario(){
		return $this->belongsTo("App\Usuario", "id_usuario", "id_usuario");
	}

	public function tipo_documento(){
		return $this->belongsTo("App\TipoDocumento", "id_tipo_doc", "id_tipo_doc");
	}

	public function clases(){
		return $this->hasOne("App\Clases", "id_documento", "id_documento");
	}

	public function evaluacion(){
		return $this->hasOne("App\Evaluacion", "id_documento", "id_documento");
	}

	public function bibliografia(){
		return $this->hasOne("App\Bibliografia", "id_documento", "id_documento");
	}

	public $timestamps = false;
	
    protected $table = "documento";

    protected $fillable = ["id_documento","fecha_subida","estado_doc", "direccion_archivo", "votos_favor", "votos_contra"];

    // protected $guarded = [""];
}
