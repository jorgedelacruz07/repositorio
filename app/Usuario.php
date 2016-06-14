<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	public function documento(){
		return $this->hasMany("App\Documento", "id_usuario", "id_usuario");
	}

    public $timestamps = false;

    protected $table = "usuario";

    protected $fillable = ["nombre_usuario","apellidos_usuario"];

    protected $guarded = ["id_usuario","password"];
}
