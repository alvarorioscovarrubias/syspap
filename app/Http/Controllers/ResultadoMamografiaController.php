<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\ResultadoMamografia as resmamo;


class ResultadoMamografiaController extends Controller{
    
    public function store(Request $request){
        $resmamo = new resmamo($request->all());
        $resmamo->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $resmamo = resmamo::find($id);
        $resmamo->fill($request->all());
        $resmamo->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $resmamo = resmamo::find($id);
        $resmamo->delete();
        return redirect::back();
    }
}
