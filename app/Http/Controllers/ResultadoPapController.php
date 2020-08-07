<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\ResultadoPap as respap;


class ResultadoPapController extends Controller{
    
    public function store(Request $request){
        $respap = new respap($request->all());
        $respap->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $respap = respap::find($id);
        $respap->fill($request->all());
        $respap->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $respap = respap::find($id);
        $respap->delete();
        return redirect::back();
    }
}
