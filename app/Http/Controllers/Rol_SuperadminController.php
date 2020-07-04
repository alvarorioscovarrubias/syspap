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

    public function tecnico(){
        return view('private.Administrador.tecnico.index');
    }

    public function matron(){
        return view('private.Administrador.matron.index');
    }

    //MANTENEDORES

    public function grupo_edad(){
        return view('private.Administrador.mantenedores.grupo-edad.index');
    }

    public function resultado_pap(){
        return view('private.Administrador.mantenedores.resultado-pap.index');
    }

    public function resultado_efm(){
        return view('private.Administrador.mantenedores.resultado-efm.index');
    }

    public function resultado_mamografia(){
        return view('private.Administrador.mantenedores.resultado-mamografia.index');
    }

    public function resultado_eco(){
        return view('private.Administrador.mantenedores.resultado-eco.index');
    }

    public function nunca_efm(){
        return view('private.Administrador.mantenedores.nunca-efm.index');
    }

}
