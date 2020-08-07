<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\ResultadoEcotomografia as respuesta;


class ResultadoEcotomografiaController extends Controller{
    
    public function store(Request $request){
        $respuesta = new respuesta($request->all());
        $respuesta->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $respuesta = respuesta::find($id);
        $respuesta->fill($request->all());
        $respuesta->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $respuesta = respuesta::find($id);
        $respuesta->delete();
        return redirect::back();
    }
}
