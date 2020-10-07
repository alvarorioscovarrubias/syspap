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
use App\NuncaEfm as nunca;
use App\Tecnico as tecnico;

class Rol_SuperadminController extends Controller
{


    public function index(){
        return view('private.Administrador.index');
    }

    public function pacientes(){
        return view('private.Administrador.pacientes.index');
    }

    public function pap(){
        return view('private.Administrador.PAP.index');
    }

    public function efm(){
        return view('private.Administrador.EFM.index');
    }

    public function mamografia(){
        return view('private.Administrador.mamografia.index');
    }

    public function eco(){
        return view('private.Administrador.ecotomografia.index');
    }

    public function tecnico(){
        $tecnico = tecnico::all();
        return view('private.Administrador.tecnico.index',compact('tecnico'));
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
        $nunca = nunca::all();
        return view('private.Administrador.mantenedores.nunca-efm.index',compact('nunca'));
    }

    public function mi_perfil(){
        return view('private.mi-perfil');
    }

}
