<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	public function curso(){
		return $this->hasMany("App\Curso", "id_area", "id_area");
	}

    public $timestamps = false;
	
    protected $table = "area";

    protected $fillable = ["id_area", "nombre_area"];

    // protected $guarded = [""];
}
