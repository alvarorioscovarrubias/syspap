<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoPap extends Model
{
	protected $table="resultado_pap";
    protected $fillable=['id','nombre'];
}
