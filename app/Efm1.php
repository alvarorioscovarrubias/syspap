<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Efm1 extends Model
{
	protected $table="efm1";
    protected $fillable=['id','fecha_examen','fecha_citacion','fecha_resultado','resultado_efm_id'];

    public function resultado()
    {
        return $this->hasMany('App\ResultadoEfm','resultado_efm_id');
    }
	
}
