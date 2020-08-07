@extends('layouts.new_private.master')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                </div>
                <h2 class="card-title">Matrones</h2>
            </header>
            <div class="card-body" style="display: block;">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            @include('private.Administrador.matron.create')
                        </div>
                    </div>
                </div>
                <div id="datatable-editable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
                        <thead>
                            <tr role="row">
                                <th rowspan="1" colspan="1">Rut</th>
                                <th rowspan="1" colspan="1">DV</th>
                                <th rowspan="1" colspan="1">Nombres</th>
                                <th rowspan="1" colspan="1">Ap Paterno</th>
                                <th rowspan="1" colspan="1">Ap Materno</th>
                                <th rowspan="1" colspan="1">Fecha Nacimiento</th>
                                <th rowspan="1" colspan="1">Sexo</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 120.6px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for ($i=0; $i < 1; $i++) { ?>   
                            <tr data-item-id="7" role="row" class="odd">
                                <td>18.485.623</td>
                                <td>5</td>
                                <td>Maria Elena</td>
                                <td>Castro</td>
                                <td>Castro</td>
                                <td>21/01/1980</td>
                                <td>F</td>
                                <td class="actions">
                                    @include('private.Administrador.matron.edit')
                                    @include('private.Administrador.matron.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="8" role="row" class="even">
                                <td>18.485.623</td>
                                <td>5</td>
                                <td>Juan José</td>
                                <td>Pérez</td>
                                <td>Rodriguez</td>
                                <td>14/05/1985</td>
                                <td>M</td>
                                <td class="actions">
                                    @include('private.Administrador.matron.edit')
                                    @include('private.Administrador.matron.destroy')
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
