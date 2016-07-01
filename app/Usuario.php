<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	public function documento(){
		return $this->hasMany("App\Documento", "id_usuario", "id_usuario");
	}

	public function alumno(){
		return $this->belongsTo("App\Alumno", "id_usuario", "id_usuario");
	}

	public function sexo(){
		return $this->belongsTo("App\Sexo", "id_sexo", "id_sexo");
	}

	public function estado_usuario(){
		return $this->belongsTo("App\EstadoUsuario", "id_estado_usuario", "id_estado_usuario");
	}

	public function tipo_usuario(){
		return $this->belongsTo("App\TipoUsuario", "id_tipo_usuario", "id_tipo_usuario");
	}

    public $timestamps = false;

    protected $table = "usuario";

    protected $fillable = ["nombre_usuario","apellidos_usuario"];

    protected $guarded = ["id_usuario","password"];
}
