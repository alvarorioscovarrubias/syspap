<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\Efm as efm;


class EfmController extends Controller{
    
    public function store(Request $request){
        $efm = new efm($request->all());
        $efm->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $efm = efm::find($id);
        $efm->fill($request->all());
        $efm->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $efm = efm::find($id);
        $efm->delete();
        return redirect::back();
    }
}
