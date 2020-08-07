@extends('layouts.new_private.master')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                </div>
                <h2 class="card-title">Pacientes</h2>
            </header>
            <div class="card-body" style="display: block;">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            @include('private.Administrador.pacientes.create')
                        </div>
                    </div>
                </div>
                <div id="datatable-editable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
                        <thead>
                            <tr role="row">
                                <th rowspan="1" colspan="1">Ficha</th>
                                <th rowspan="1" colspan="1">Rut</th>
                                <th rowspan="1" colspan="1">DV</th>
                                <th rowspan="1" colspan="1">Nombres</th>
                                <th rowspan="1" colspan="1">Ap Paterno</th>
                                <th rowspan="1" colspan="1">Ap Materno</th>
                                <th rowspan="1" colspan="1">Fecha Nacimiento/Edad</th>
                                <th rowspan="1" colspan="1">Grupo Edad</th>
                                <th rowspan="1" colspan="1">Sexo</th>
                                <th rowspan="1" colspan="1">Dirección</th>
                                <th rowspan="1" colspan="1">Sector</th>
                                <th rowspan="1" colspan="1">Tarjetero</th>
                                <th rowspan="1" colspan="1">Nueva</th>
                                <th rowspan="1" colspan="1"> A-R </th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 120.6px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for ($i=0; $i < 2; $i++) { ?>   
                            <tr data-item-id="7" role="row" class="odd">
                                <td class="sorting_1">789456</td>
                                <td>10.123.123</td>
                                <td>5</td>
                                <td>Maria Elena</td>
                                <td>Castro</td>
                                <td>Castro</td>
                                <td>21/01/1980 - 40</td>
                                <td>40/45</td>
                                <td>F</td>
                                <td>Villa 1 calle las flores 1502</td>
                                <td>Norte</td>
                                <td>Si</td>
                                <td>No</td>
                                <td>R</td>
                                <td class="actions">
                                    @include('private.Administrador.pacientes.edit')
                                    @include('private.Administrador.pacientes.detail')
                                    @include('private.Administrador.pacientes.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="8" role="row" class="even">
                                <td class="sorting_1">789456</td>
                                <td>9.321.321</td>
                                <td>1</td>
                                <td>Carla Javiera</td>
                                <td>Reyes</td>
                                <td>Olivares</td>
                                <td>15/1/1990 - 30</td>
                                <td>30/35</td>
                                <td>F</td>
                                <td>Villa 2 </td>
                                <td>Sur</td>
                                <td>No</td>
                                <td>Si</td>
                                <td>A</td>
                                <td class="actions">
                                    @include('private.Administrador.pacientes.edit')
                                    @include('private.Administrador.pacientes.detail')
                                    @include('private.Administrador.pacientes.destroy')
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
@stop
