<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','Rol_SuperadminController@index');

//ADMINISTRADOR
Route::get('Administrador/pacientes','Rol_SuperadminController@pacientes');
Route::get('Administrador/PAP3','Rol_SuperadminController@pap3');
Route::get('Administrador/PAP1','Rol_SuperadminController@pap1');
Route::get('Administrador/EFM3','Rol_SuperadminController@efm3');
Route::get('Administrador/EFM1','Rol_SuperadminController@efm1');
Route::get('Administrador/mamografia','Rol_SuperadminController@mamografia');
Route::get('Administrador/ecotomografia','Rol_SuperadminController@eco');

//TECNICO
Route::get('Tecnico/pacientes','Rol_TecnicoController@pacientes');
Route::get('Tecnico/PAP3','Rol_TecnicoController@pap3');
Route::get('Tecnico/PAP1','Rol_TecnicoController@pap1');
Route::get('Tecnico/EFM3','Rol_TecnicoController@efm3');
Route::get('Tecnico/EFM1','Rol_TecnicoController@efm1');
Route::get('Tecnico/mamografia','Rol_TecnicoController@mamografia');
Route::get('Tecnico/ecotomografia','Rol_TecnicoController@eco');


Route::group(['middleware' => 'web'], function(){

	Route::group(['middleware' => ['auth','modules_nav'], 'prefix' => 'private'], function(){
		
		Route::group(['middleware' => 'role:Administrador'], function(){

		});
	});
});



