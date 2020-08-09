<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\NuncaEfm as nunca;


class NuncaEfmController extends Controller{
    
    public function store(Request $request){
        $nunca = new nunca($request->all());
        $nunca->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $nunca = nunca::find($id);
        $nunca->fill($request->all());
        $nunca->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $nunca = nunca::find($id);
        $nunca->delete();
        return redirect::back();
    }
}
