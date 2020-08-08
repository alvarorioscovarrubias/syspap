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
use App\GrupoEdad as grupoedad;
use App\ResultadoPap as resultadopap;
use App\ResultadoEfm as resultadoefm;
use App\ResultadoMamografia as resultadomamo;
use App\ResultadoEcotomografia as resultadoeco;

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
        $grupoedad = grupoedad::all();
        return view('private.Administrador.mantenedores.grupo-edad.index',compact('grupoedad'));
    }

    public function resultado_pap(){
        $resultadopap = resultadopap::all();
        return view('private.Administrador.mantenedores.resultado-pap.index',compact('resultadopap'));
    }

    public function resultado_efm(){
        $resultadoefm = resultadoefm::all();
        return view('private.Administrador.mantenedores.resultado-efm.index',compact('resultadoefm'));
    }

    public function resultado_mamografia(){
        $resultadomamo = resultadomamo::all();
        return view('private.Administrador.mantenedores.resultado-mamografia.index',compact('resultadomamo'));
    }

    public function resultado_eco(){
        $resultadoeco = resultadoeco::all();
        return view('private.Administrador.mantenedores.resultado-eco.index',compact('resultadoeco'));
    }

    public function nunca_efm(){
        return view('private.Administrador.mantenedores.nunca-efm.index');
    }

}
