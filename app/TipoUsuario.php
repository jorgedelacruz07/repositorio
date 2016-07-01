<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    public function usuario(){
		return $this->hasMany("App\Usuario", "id_tipo_usuario", "id_tipo_usuario");
	}

    public $timestamps = false;

    protected $table = "tipo_usuario";

    protected $fillable = ["id_tipo_usuario", "nombre_tipo_usuario"];
}
