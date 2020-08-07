<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mamografia extends Model
{
	protected $table="mamografia";
    protected $fillable=['id','fecha_examen','fecha_citacion','fecha_resultado','resultado_mamografia_id'];

    public function resultado()
    {
        return $this->hasMany('App\ResultadoMamografia','resultado_mamografia_id');
    }
	
}
