<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\Pap1 as pap1;


class Pap1Controller extends Controller{
    
    public function store(Request $request){
        $pap1 = new pap1($request->all());
        $pap1->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $pap1 = pap1::find($id);
        $pap1->fill($request->all());
        $pap1->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $pap1 = pap1::find($id);
        $pap1->delete();
        return redirect::back();
    }
}
