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

class Rol_SuperadminController extends Controller
{


    public function index(){
        return view('private.Administrador.index');
    }

    public function pacientes(){
        return view('private.Administrador.pacientes.index');
    }

    public function pap3(){
        return view('private.Administrador.PAP3.index');
    }
    public function pap1(){
        return view('private.Administrador.PAP1.index');
    }
    
    public function efm3(){
        return view('private.Administrador.EFM3.index');
    }

    public function efm1(){
        return view('private.Administrador.EFM1.index');
    }

    public function mamografia(){
        return view('private.Administrador.mamografia.index');
    }

    public function eco(){
        return view('private.Administrador.ecotomografia.index');
    }

}
