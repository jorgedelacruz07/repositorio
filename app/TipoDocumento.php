<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
	public function tipo_documento(){
		return $this->hasMany("App\Documento", "id_tipo_doc", "id_tipo_doc");
	}

    public $timestamps = false;

    protected $table = "tipo_documento";

    protected $fillable = ["id_tipo_doc","nombre_tipo_doc"];

    // protected $guarded = [""];
}
