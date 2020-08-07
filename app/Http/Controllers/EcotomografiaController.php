<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\Ecotomografia as eco;


class EcotomografiaController extends Controller{
    
    public function store(Request $request){
        $eco = new eco($request->all());
        $eco->save();
        return redirect::back(); 
    }

    public function update(Request $request, $id){
        $eco = eco::find($id);
        $eco->fill($request->all());
        $eco->save();
        return redirect::back(); 
    }

    public function destroy($id){
        $eco = eco::find($id);
        $eco->delete();
        return redirect::back();
    }
}
