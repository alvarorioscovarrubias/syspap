<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
	protected $table="tecnico";
    protected $fillable=['id','nombres','apellido_paterno','apellido_materno','rut','dv','fecha_nacimiento','especialidad','email','password'];

}
