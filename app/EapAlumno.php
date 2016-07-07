<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EapAlumno extends Model
{
    public function alumno(){
		return $this->hasMany("App\Alumno", "id_eap", "id_eap");
	}

	public function plan_estudios(){
		return $this->hasMany("App\PlanEstudios", "id_eap", "id_eap");
	}

	public $timestamps = false;
	
    protected $table = "eap_alumno";

    protected $fillable = ["id_eap", "nombre_eap"];

    // protected $guarded = [""];
}
