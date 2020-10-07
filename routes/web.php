<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','Rol_SuperadminController@index')->middleware('auth');
Route::get('/mi-perfil','Rol_SuperadminController@mi_perfil')->middleware('auth');

//ADMINISTRADOR
Route::group(['middleware' => 'role:Administrador'], function(){
	Route::get('Administrador/pacientes','Rol_SuperadminController@pacientes');
	Route::get('Administrador/PAP','Rol_SuperadminController@pap');
	Route::get('Administrador/EFM','Rol_SuperadminController@efm');
	Route::get('Administrador/mamografia','Rol_SuperadminController@mamografia');
	Route::get('Administrador/ecotomografia','Rol_SuperadminController@eco');
	Route::get('Administrador/tecnicos','Rol_SuperadminController@tecnico');
	Route::get('Administrador/matrones','Rol_SuperadminController@matron');

	//MANTENEDORES
	Route::get('/admin/mantenedor/grupo-edad','Rol_SuperadminController@grupo_edad');
	Route::get('/admin/mantenedor/resultado-pap','Rol_SuperadminController@resultado_pap');
	Route::get('/admin/mantenedor/resultado-efm','Rol_SuperadminController@resultado_efm');
	Route::get('/admin/mantenedor/resultado-mamografia','Rol_SuperadminController@resultado_mamografia');
	Route::get('/admin/mantenedor/resultado-eco','Rol_SuperadminController@resultado_eco');
	Route::get('/admin/mantenedor/nunca-efm','Rol_SuperadminController@nunca_efm');
});

//TECNICO
Route::group(['middleware' => 'role:Tecnico'], function(){
	Route::get('Tecnico/pacientes','Rol_TecnicoController@pacientes');
	Route::get('Tecnico/PAP','Rol_TecnicoController@pap');
	Route::get('Tecnico/EFM','Rol_TecnicoController@efm');
	Route::get('Tecnico/mamografia','Rol_TecnicoController@mamografia');
	Route::get('Tecnico/ecotomografia','Rol_TecnicoController@eco');
});

//MANTENEDORES
//Route::group(['middleware' => 'web'], function(){

	Route::resource('mantenedor-ecotomografia','EcotomografiaController');
	Route::delete('mantenedor-ecotomografia/{id}', array('uses'=>'EcotomografiaController@destroy','as'=>'mantenedor-ecotomografia.delete'));

	Route::resource('mantenedor-efm','EfmController');
	Route::delete('mantenedor-efm/{id}', array('uses'=>'EfmController@destroy','as'=>'mantenedor-efm.delete'));

	Route::resource('mantenedor-grupo-edad','GrupoEdadController');
	Route::delete('mantenedor-grupo-edad/{id}', array('uses'=>'GrupoEdadController@destroy','as'=>'mantenedor-grupo-edad.delete'));

	Route::resource('mantenedor-mamografia','MamografiaController');
	Route::delete('mantenedor-mamografia/{id}', array('uses'=>'MamografiaController@destroy','as'=>'mantenedor-mamografia.delete'));

	Route::resource('mantenedor-paciente','PacienteController');
	Route::delete('mantenedor-paciente/{id}', array('uses'=>'PacienteController@destroy','as'=>'mantenedor-paciente.delete'));

	Route::resource('mantenedor-pap','Pap1Controller');
	Route::delete('mantenedor-pap/{id}', array('uses'=>'PapController@destroy','as'=>'mantenedor-pap.delete'));

	Route::resource('mantenedor-resultado-eco','ResultadoEcotomografiaController');
	Route::delete('mantenedor-resultado-eco/{id}', array('uses'=>'ResultadoEcotomografiaController@destroy','as'=>'mantenedor-resultado-eco.delete'));

	Route::resource('mantenedor-resultado-efm','ResultadoEfmController');
	Route::delete('mantenedor-resultado-efm/{id}', array('uses'=>'ResultadoEfmController@destroy','as'=>'mantenedor-resultado-efm.delete'));

	Route::resource('mantenedor-resultado-mamografia','ResultadoMamografiaController');
	Route::delete('mantenedor-resultado-mamografia/{id}', array('uses'=>'ResultadoMamografiaController@destroy','as'=>'mantenedor-resultado-mamografia.delete'));

	Route::resource('mantenedor-res-pap','ResultadoPapController');
	Route::delete('mantenedor-res-pap/{id}', array('uses'=>'ResultadoPapController@destroy','as'=>'mantenedor-res-pap.delete'));

	Route::resource('mantenedor-sexo','SexoController');
	Route::delete('mantenedor-sexo/{id}', array('uses'=>'SexoController@destroy','as'=>'mantenedor-sexo.delete'));

	Route::resource('mantenedor-nunca','NuncaEfmController');
	Route::delete('mantenedor-nunca/{id}', array('uses'=>'NuncaEfmController@destroy','as'=>'mantenedor-nunca.delete'));

	Route::resource('mantenedor-tecnico','TecnicoController');
	Route::delete('mantenedor-tecnico/{id}', array('uses'=>'TecnicoController@destroy','as'=>'mantenedor-tecnico.delete'));
//});