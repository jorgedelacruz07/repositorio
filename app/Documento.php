<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
	public function usuario(){
		return $this->belongsTo("App\Usuario", "id_usuario", "id_usuario");
	}

	public $timestamps = false;
	
    protected $table = "documento";

    protected $fillable = ["id_documento","fecha_subida","estado_doc", "direccion_archivo", "votos_favor", "votos_contra"];

    // protected $guarded = [""];
}
