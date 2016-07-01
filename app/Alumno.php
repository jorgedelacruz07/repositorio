<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public function usuario(){
		return $this->hasOne("App\Usuario", "id_usuario", "id_usuario");
	}

	public function eap_alumno(){
		return $this->belongsTo("App\EapAlumno", "id_eap", "id_eap");
	}

	public function distrito(){
		return $this->belongsTo("App\Distrito", "ubigeo_distrito", "ubigeo_distrito");
	}

	public $timestamps = false;
	
    protected $table = "alumno";

    protected $fillable = ["telef_contacto","email","dir_fotografia", "nivel", "puntos_alumno", "numero_fallas", "direccion_actual"];

    // protected $guarded = [""];
}
