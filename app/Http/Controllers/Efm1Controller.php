<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\Efm1 as efm1;


class Efm1Controller extends Controller{
    
    public function store(Request $request){
        $efm1 = new efm1($request->all());
        $efm1->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $efm1 = efm1::find($id);
        $efm1->fill($request->all());
        $efm1->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $efm1 = efm1::find($id);
        $efm1->delete();
        return redirect::back();
    }
}
