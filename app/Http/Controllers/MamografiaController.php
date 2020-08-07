<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\Mamografia as mamo;


class MamografiaController extends Controller{
    
    public function store(Request $request){
        $mamo = new mamo($request->all());
        $mamo->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $mamo = mamo::find($id);
        $mamo->fill($request->all());
        $mamo->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $mamo = mamo::find($id);
        $mamo->delete();
        return redirect::back();
    }
}
