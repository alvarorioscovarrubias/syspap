<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoEcotomografia extends Model
{
	protected $table="resultado_ecotomografia";
    protected $fillable=['id','nombre'];
	
}
