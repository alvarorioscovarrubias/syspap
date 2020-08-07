<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','Rol_SuperadminController@index')->middleware('auth');

//ADMINISTRADOR
Route::group(['middleware' => 'role:Administrador'], function(){
	Route::get('Administrador/pacientes','Rol_SuperadminController@pacientes');
	Route::get('Administrador/PAP3','Rol_SuperadminController@pap3');
	Route::get('Administrador/PAP1','Rol_SuperadminController@pap1');
	Route::get('Administrador/EFM3','Rol_SuperadminController@efm3');
	Route::get('Administrador/EFM1','Rol_SuperadminController@efm1');
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
	Route::get('Tecnico/PAP3','Rol_TecnicoController@pap3');
	Route::get('Tecnico/PAP1','Rol_TecnicoController@pap1');
	Route::get('Tecnico/EFM3','Rol_TecnicoController@efm3');
	Route::get('Tecnico/EFM1','Rol_TecnicoController@efm1');
	Route::get('Tecnico/mamografia','Rol_TecnicoController@mamografia');
	Route::get('Tecnico/ecotomografia','Rol_TecnicoController@eco');
});

//MANTENEDORES
Route::group(['middleware' => 'web'], function(){

	Route::resource('mantenedor-ecotomografia','EcotomografiaController');
	Route::delete('mantenedor-ecotomografia/{id}', array('uses'=>'EcotomografiaController@destroy','as'=>'mantenedor-ecotomografia.delete'));

	Route::resource('mantenedor-efm1','Efm1Controller');
	Route::delete('mantenedor-efm1/{id}', array('uses'=>'Efm1Controller@destroy','as'=>'mantenedor-efm1.delete'));

	Route::resource('mantenedor-efm3','Efm3Controller');
	Route::delete('mantenedor-efm3/{id}', array('uses'=>'Efm3Controller@destroy','as'=>'mantenedor-efm3.delete'));

	Route::resource('mantenedor-grupo-edad','GrupoEdadController');
	Route::delete('mantenedor-grupo-edad/{id}', array('uses'=>'GrupoEdadController@destroy','as'=>'mantenedor-grupo-edad.delete'));

	Route::resource('mantenedor-mamografia','MamografiaController');
	Route::delete('mantenedor-mamografia/{id}', array('uses'=>'MamografiaController@destroy','as'=>'mantenedor-mamografia.delete'));

	Route::resource('mantenedor-paciente','PacienteController');
	Route::delete('mantenedor-paciente/{id}', array('uses'=>'PacienteController@destroy','as'=>'mantenedor-paciente.delete'));

	Route::resource('mantenedor-pap1','Pap1Controller');
	Route::delete('mantenedor-pap1/{id}', array('uses'=>'Pap1Controller@destroy','as'=>'mantenedor-pap1.delete'));

	Route::resource('mantenedor-pap3','Pap3Controller');
	Route::delete('mantenedor-pap3/{id}', array('uses'=>'Pap3Controller@destroy','as'=>'mantenedor-pap3.delete'));

	Route::resource('mantenedor-resultado-ecotomografia','ResultadoEcotomografiaController');
	Route::delete('mantenedor-resultado-ecotomografia/{id}', array('uses'=>'ResultadoEcotomografiaController@destroy','as'=>'mantenedor-resultado-ecotomografia.delete'));

	Route::resource('mantenedor-resultado-efm','ResultadoEfmController');
	Route::delete('mantenedor-resultado-efm/{id}', array('uses'=>'ResultadoEfmController@destroy','as'=>'mantenedor-resultado-efm.delete'));

	Route::resource('mantenedor-resultado-mamografia','ResultadoMamografiaController');
	Route::delete('mantenedor-resultado-mamografia/{id}', array('uses'=>'ResultadoMamografiaController@destroy','as'=>'mantenedor-resultado-mamografia.delete'));

	Route::resource('mantenedor-resultado-pap','ResultadoPapController');
	Route::delete('mantenedor-resultado-pap/{id}', array('uses'=>'ResultadoPapController@destroy','as'=>'mantenedor-resultado-pap.delete'));

	Route::resource('mantenedor-sexo','SexoController');
	Route::delete('mantenedor-sexo/{id}', array('uses'=>'SexoController@destroy','as'=>'mantenedor-sexo.delete'));
});