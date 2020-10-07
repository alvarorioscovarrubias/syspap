<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\Pap as pap;


class PapController extends Controller{
    
    public function store(Request $request){
        $pap = new pap($request->all());
        $pap->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $pap = pap::find($id);
        $pap->fill($request->all());
        $pap->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $pap = pap::find($id);
        $pap->delete();
        return redirect::back();
    }
}
