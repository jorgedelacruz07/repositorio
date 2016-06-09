<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;

    protected $table = "USUARIO";

    protected $fillable = ["nombre_usuario","apellidos_usuario"];

    protected $guarded = ["id_usuario","password"];
}
