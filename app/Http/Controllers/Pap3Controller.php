<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\Pap3 as pap3;


class Pap3Controller extends Controller{
    
    public function store(Request $request){
        $pap3 = new pap3($request->all());
        $pap3->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $pap3 = pap3::find($id);
        $pap3->fill($request->all());
        $pap3->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $pap3 = pap3::find($id);
        $pap3->delete();
        return redirect::back();
    }
}
