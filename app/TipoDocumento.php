<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    public $timestamps = false;

    protected $table = "tipo_documento";

    protected $fillable = ["id_tipo_doc","nombre_tipo_doc"];

    // protected $guarded = [""];
}
