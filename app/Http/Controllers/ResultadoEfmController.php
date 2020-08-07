<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\ResultadoEfm as res;


class ResultadoEfmController extends Controller{
    
    public function store(Request $request){
        $res = new res($request->all());
        $res->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $res = res::find($id);
        $res->fill($request->all());
        $res->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $res = res::find($id);
        $res->delete();
        return redirect::back();
    }
}
