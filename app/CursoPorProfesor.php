<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoPorProfesor extends Model
{
	public function curso(){
		return $this->belongsTo("App\Curso", "id_curso", "id_curso");
	}

	public function documento(){
		return $this->hasMany("App\Documento", "id_curso", "id_curso");
	}

	public $timestamps = false;

	protected $table = "cursoxprofesor";

	protected $fillable = ["id_cursoXprof"];

	// protected $guarded = [""];
}
