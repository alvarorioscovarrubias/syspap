<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\Efm3 as efm3;


class Efm3Controller extends Controller{
    
    public function store(Request $request){
        $efm3 = new efm3($request->all());
        $efm3->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $efm3 = efm3::find($id);
        $efm3->fill($request->all());
        $efm3->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $efm3 = efm3::find($id);
        $efm3->delete();
        return redirect::back();
    }
}
