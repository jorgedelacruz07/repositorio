<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    public $timestamps = false;
	
    protected $table = "evaluacion";

    protected $fillable = ["id_documento", "anio_tomado"];

    // protected $guarded = [""];
}
