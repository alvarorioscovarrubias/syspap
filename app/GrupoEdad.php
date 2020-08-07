<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoEdad extends Model
{
	protected $table="grupo_edad";
    protected $fillable=['id','nombre'];

}
