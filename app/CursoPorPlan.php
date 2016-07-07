<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoPorPlan extends Model
{
	public function plan_estudios(){
		return $this->belongsTo("App\PlanEstudios", "id_plan_estudios", "id_plan_estudios");
	}

	public function curso(){
		return $this->belongsTo("App\Curso", "id_curso", "id_curso");
	}

    public $timestamps = false;
	
    protected $table = "cursoxplan";

    // Dudas
    protected $fillable = ["id_curso", "id_plan_estudios"];

    // protected $guarded = [""];
}
