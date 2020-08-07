<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\GrupoEdad as grupo;


class GrupoEdadController extends Controller{
    
    public function store(Request $request){
        $grupo = new grupo($request->all());
        $grupo->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $grupo = grupo::find($id);
        $grupo->fill($request->all());
        $grupo->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $grupo = grupo::find($id);
        $grupo->delete();
        return redirect::back();
    }
}
