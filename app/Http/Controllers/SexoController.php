<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\Sexo as sexo;


class SexoController extends Controller{
    
    public function store(Request $request){
        $sexo = new sexo($request->all());
        $sexo->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $sexo = sexo::find($id);
        $sexo->fill($request->all());
        $sexo->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $sexo = sexo::find($id);
        $sexo->delete();
        return redirect::back();
    }
}
