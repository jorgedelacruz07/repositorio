<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function provincia(){
		return $this->hasMany("App\Provincia", "ubigeo_departamento", "ubigeo_departamento");
	}

	public $timestamps = false;
	
    protected $table = "departamento";

    protected $fillable = ["ubigeo_departamento", "nombre_departamento"];

    // protected $guarded = [""];
}
