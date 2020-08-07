<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\Paciente as paciente;


class PacienteController extends Controller{
    
    public function store(Request $request){
        $paciente = new paciente($request->all());
        $paciente->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $paciente = paciente::find($id);
        $paciente->fill($request->all());
        $paciente->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $paciente = paciente::find($id);
        $paciente->delete();
        return redirect::back();
    }
}
