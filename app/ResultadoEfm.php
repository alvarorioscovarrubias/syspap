<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoEfm extends Model
{
	protected $table="resultado_efm";
    protected $fillable=['id','nombre'];
}
