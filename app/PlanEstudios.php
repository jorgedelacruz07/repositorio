<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanEstudios extends Model
{
	public function cursoxplan(){
		return $this->hasMany("App\CursoPorPlan", "id_plan_estudios", "id_plan_estudios");
	}

	public function eap_alumno(){
		return $this->belongsTo("App\EapAlumno", "id_eap", "id_eap");
	}

    public $timestamps = false;
	
    protected $table = "plan_estudios";

    protected $fillable = ["id_plan_estudios", "anio_plan_estudios"];

    // protected $guarded = [""];
}
