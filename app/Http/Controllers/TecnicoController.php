<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\Tecnico as tecnico;
use App\User as user;


class TecnicoController extends Controller{
    
    public function store(Request $request){
        $tecnico = new tecnico($request->all());
        $user = new user();
        $user->name = $tecnico->nombres.' '.$tecnico->apellido_paterno.' '.$tecnico->apellido_materno;
        $user->email = $tecnico->email;
        $user->password = bcrypt($tecnico->password);
        $user->rut = $tecnico->rut;
        $user->dv = $tecnico->dv;
        $user->roles_id = 11;
        $tecnico->password = bcrypt($request->password);
        $user->save();
        $tecnico->save();
        return redirect::back();
    }

    public function update(Request $request, $id){
        //tecnico
        $tecnico = tecnico::find($id);
        $user = user::where('rut',$tecnico->rut)->first();
        $tecnico->fill($request->all());
        //usuario
        $user->name = $tecnico->nombres.' '.$tecnico->apellido_paterno.' '.$tecnico->apellido_materno;
        $user->email = $tecnico->email;
        $user->rut = $tecnico->rut;
        $user->dv = $tecnico->dv;
        //save
        
        $user->save();
        $tecnico->save();
        return redirect::back();
    }

    public function destroy($id){
        $tecnico = tecnico::find($id);
        $user = user::where('rut',$tecnico->rut);
        $user->delete();
        $tecnico->delete();
        return redirect::back();
    }
}
