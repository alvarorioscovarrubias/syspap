<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pap1 extends Model
{
	protected $table="pap1";
    protected $fillable=['id','fecha_examen','fecha_citacion','fecha_resultado','resultado_pap_id'];

    public function resultado()
    {
        return $this->hasMany('App\ResultadoPap','resultado_pap_id');
    }
	
}
