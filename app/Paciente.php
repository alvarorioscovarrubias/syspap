<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
	protected $table="paciente";
    protected $fillable=['id','nombres','apellido_paterno','apellido_materno','sector','ficha','rut','dv','tarjetero','fecha_nacimiento','direccion','grupo_edad_id','sexo_id','efm1_id','efm3_id','pap1_id','pap3_id','mamografia_id','ecotomografia_id'];

    public function grupo_edad(){
        return $this->hasMany('App\GrupoEdad','grupo_edad_id');
    }

    public function sexo(){
        return $this->hasMany('App\Sexo','sexo_id');
    }

    public function efm_1(){
        return $this->hasMany('App\Efm1','efm1_id');
    }

    public function efm_3(){
        return $this->hasMany('App\Efm3','efm3_id');
    }

    public function pap_1(){
        return $this->hasMany('App\Pap1','pap1_id');
    }

    public function pap_3(){
        return $this->hasMany('App\Pap3','pap3_id');
    }

    public function mamografia(){
        return $this->hasMany('App\Mamografia','mamografia_id');
    }
	
	public function ecotomografia(){
        return $this->hasMany('App\Ecotomografia','ecotomografia_id');
    }
}
