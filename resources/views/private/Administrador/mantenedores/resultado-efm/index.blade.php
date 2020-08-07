@extends('layouts.new_private.master')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                </div>
                <h2 class="card-title">Resultado EFM</h2>
            </header>
            <div class="card-body" style="display: block;">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            @include('private.Administrador.mantenedores.resultado-efm.create')
                        </div>
                    </div>
                </div>
                <div id="datatable-editable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
                        <thead>
                            <tr role="row">
                                <th rowspan="1" colspan="1">id</th>
                                <th rowspan="1" colspan="1">Nombre</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 120.6px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>  
                            <tr data-item-id="7" role="row" class="odd">
                                <td>1</td>
                                <td>MX</td>
                                <td class="actions">
                                    @include('private.Administrador.mantenedores.resultado-efm.edit')
                                    @include('private.Administrador.mantenedores.resultado-efm.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="even">
                                <td>2</td>
                                <td>NORMAL</td>
                                <td class="actions">
                                    @include('private.Administrador.mantenedores.resultado-mamografia.edit')
                                    @include('private.Administrador.mantenedores.resultado-mamografia.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="odd">
                                <td>3</td>
                                <td>PM</td>
                                <td class="actions">
                                    @include('private.Administrador.mantenedores.resultado-mamografia.edit')
                                    @include('private.Administrador.mantenedores.resultado-mamografia.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="odd">
                                <td>4</td>
                                <td>OBS. FIBROADENOMA</td>
                                <td class="actions">
                                    @include('private.Administrador.mantenedores.resultado-mamografia.edit')
                                    @include('private.Administrador.mantenedores.resultado-mamografia.destroy')
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
@stop
