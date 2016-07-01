<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    public function usuario(){
		return $this->hasMany("App\Usuario", "id_sexo", "id_sexo");
	}

    public $timestamps = false;

    protected $table = "sexo";

    protected $fillable = ["id_sexo", "nombre_sexo"];
}
