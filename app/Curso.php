<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	public function area(){
		return $this->belongsTo("App\Area", "id_area", "id_area");
	}

	public function cursoxplan(){
		return $this->hasMany("App\CursoPorPlan", "id_curso", "id_curso");
	}

	public function cursoxprofesor(){
		return $this->hasMany("App\CursoPorProfesor", "id_curso", "id_curso");
	}

	public $timestamps = false;
	
    protected $table = "curso";

    protected $fillable = ["id_curso","nombre_curso", "num_creditos"];

    // protected $guarded = [""];
}
