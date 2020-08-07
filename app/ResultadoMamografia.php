<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoMamografia extends Model
{
	protected $table="resultado_mamografia";
    protected $fillable=['id','nombre'];
}
