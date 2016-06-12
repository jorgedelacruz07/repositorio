<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoPorProfesor extends Model
{
	public $timestamps = false;

	protected $table = "cursoxprofesor";

	protected $fillable = ["id_cursoXprof"];

	// protected $guarded = [""];
}
