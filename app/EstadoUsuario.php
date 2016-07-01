<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoUsuario extends Model
{
	public function usuario(){
		return $this->hasMany("App\Usuario", "id_estado_usuario", "id_estado_usuario");
	}

    public $timestamps = false;

    protected $table = "estado_usuario";

    protected $fillable = ["id_estado_usuario", "nombre_estado_usuario"];
}
