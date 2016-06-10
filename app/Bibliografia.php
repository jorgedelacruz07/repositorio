<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bibliografia extends Model
{
	public $timestamps = false;
	
    protected $table = "bibliografia";

    protected $fillable = ["titulo_bibl", "anio_publicacion"];

    // protected $guarded = [""];
}
