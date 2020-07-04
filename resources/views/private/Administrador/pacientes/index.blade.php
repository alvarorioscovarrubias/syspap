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
                            <button id="addToTable" class="btn btn-primary">Agregar Paciente <i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div id="datatable-editable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="datatable-editable_filter" class="dataTables_filter">
                                <label>
                                    <input type="search" class="form-control pull-right" placeholder="Buscar..." aria-controls="datatable-editable">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0 dataTable no-footer" id="datatable-editable" role="grid">
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
                                        <a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
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
                                        <a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="dataTables_paginate paging_simple_numbers" id="datatable-editable_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="datatable-editable_previous">
                                <a href="#" aria-controls="datatable-editable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                            </li>
                            <li class="paginate_button page-item active">
                                <a href="#" aria-controls="datatable-editable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                            </li>
                            <li class="paginate_button page-item ">
                                <a href="#" aria-controls="datatable-editable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                            </li>
                            <li class="paginate_button page-item ">
                                <a href="#" aria-controls="datatable-editable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                            </li>
                            <li class="paginate_button page-item ">
                                <a href="#" aria-controls="datatable-editable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                            </li>
                            <li class="paginate_button page-item ">
                                <a href="#" aria-controls="datatable-editable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                            </li>
                            <li class="paginate_button page-item ">
                                <a href="#" aria-controls="datatable-editable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                            </li>
                            <li class="paginate_button page-item next" id="datatable-editable_next">
                                <a href="#" aria-controls="datatable-editable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@stop
