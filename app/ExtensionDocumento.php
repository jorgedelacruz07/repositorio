<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtensionDocumento extends Model
{
    public $timestamps = false;

	protected $table = "extension_doc";

	protected $fillable = ["id_extension_doc","nombre_extension_doc"];

    // protected $protected = [""];
}
