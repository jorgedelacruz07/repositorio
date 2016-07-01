<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    public function distrito(){
		return $this->hasMany("App\Alumno", "ubigeo_provincia", "ubigeo_provincia");
	}

	public function departamento(){
		return $this->belongsTo("App\Departamento", "ubigeo_departamento", "ubigeo_departamento");
	}

	public $timestamps = false;
	
    protected $table = "provincia";

    protected $fillable = ["ubigeo_provincia", "nombre_provincia"];

    // protected $guarded = [""];
}
