<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bibliografia extends Model
{
	public function documento(){
		return $this->hasMany("App\Documento", "id_documento", "id_documento");
	}

	public $timestamps = false;
	
    protected $table = "bibliografia";

    protected $fillable = ["titulo_bibl", "anio_publicacion"];

    // protected $guarded = [""];
}
