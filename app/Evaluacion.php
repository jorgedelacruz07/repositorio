<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
	public function documento(){
		return $this->hasMany("App\Documento", "id_documento", "id_documento");
	}

    public $timestamps = false;
	
    protected $table = "evaluacion";

    protected $fillable = ["id_documento", "anio_tomado"];

    // protected $guarded = [""];
}
