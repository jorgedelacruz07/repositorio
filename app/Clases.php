<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clases extends Model
{
    public $timestamps = false;
	
    protected $table = "clases";

    protected $fillable = ["id_documento", "tema", "semana_dictada", "anio_dictado"];

    // protected $guarded = [""];
}
