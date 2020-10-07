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

    public function pap(){
        return view('private.Tecnico.PAP.index');
    }

    public function efm(){
        return view('private.Tecnico.EFM.index');
    }

    public function mamografia(){
        return view('private.Tecnico.mamografia.index');
    }

    public function eco(){
        return view('private.Tecnico.ecotomografia.index');
    }
}
