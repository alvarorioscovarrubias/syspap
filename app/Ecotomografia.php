<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecotomografia extends Model
{
	protected $table="ecotomografia";
    protected $fillable=['id','fecha_examen','fecha_citacion','fecha_resultado','resultado_ecotomografia_id'];

    public function resultado()
    {
        return $this->hasMany('App\ResultadoEcotomografia','resultado_ecotomografia_id');
    }
	
}
