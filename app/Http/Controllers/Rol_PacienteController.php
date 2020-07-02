<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

/*use App\Examenes as examenes;*/
use Session;
use Auth;

class Rol_TecnicoController extends Controller
{

    public function pacientes(){
        return view('private.Tecnico.pacientes.index');
    }

    public function pap3(){
        return view('private.Tecnico.PAP3.index');
    }
    public function pap1(){
        return view('private.Tecnico.PAP1.index');
    }
    
    public function efm3(){
        return view('private.Tecnico.EFM3.index');
    }

    public function efm1(){
        return view('private.Tecnico.EFM1.index');
    }

    public function mamografia(){
        return view('private.Tecnico.mamografia.index');
    }

    public function eco(){
        return view('private.Tecnico.ecotomografia.index');
    }
}
