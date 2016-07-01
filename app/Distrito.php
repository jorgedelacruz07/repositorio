<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    public function alumno(){
		return $this->hasMany("App\Alumno", "ubigeo_distrito", "ubigeo_distrito");
	}

	public function provincia(){
		return $this->belongsTo("App\Provincia", "ubigeo_provincia", "ubigeo_provincia");
	}

	public $timestamps = false;
	
    protected $table = "distrito";

    protected $fillable = ["ubigeo_distrito", "nombre_distrito"];

    // protected $guarded = [""];
}
