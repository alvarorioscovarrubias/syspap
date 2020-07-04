@extends('layouts.new_private.master')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                </div>
                <h2 class="card-title">PAP cada 1 año</h2>
            </header>
            <div class="card-body" style="display: block;">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <button id="addToTable" class="btn btn-primary">Agregar PAP <i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div id="datatable-editable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="datatable-editable_filter" class="dataTables_filter">
                                <label>
                                    <input type="search" class="form-control pull-right" placeholder="18.485.623-5" aria-controls="datatable-editable">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0 dataTable no-footer" id="datatable-editable" role="grid">
                            <thead>
                                <tr role="row">
                                    <th rowspan="1" colspan="1">Rut Paciente</th>
                                    <th rowspan="1" colspan="1">Nombre Completo</th>
                                    <th rowspan="1" colspan="1">Fecha Exámen</th>
                                    <th rowspan="1" colspan="1">Resultado</th>
                                    <th rowspan="1" colspan="1">Fecha Citación</th>
                                    <th rowspan="1" colspan="1">Años del último exámen</th>
                                    <th rowspan="1" colspan="1">Vigencia</th>
                                    <th rowspan="1" colspan="1">Fecha Resultado</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 120.6px;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php for ($i=0; $i < 1; $i++) { ?>   
                                <tr data-item-id="7" role="row" class="odd">
                                    <td>18.485.623-5</td>
                                    <td>Maria Elena Castro Castro</td>
                                    <td>21/01/2020</td>
                                    <td>I G8 J1</td>
                                    <td>21/01/2021</td>
                                    <td>1</td>
                                    <td>Vigente</td>
                                    <td>01/02/2020</td>
                                    <td class="actions">
                                        <a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr data-item-id="8" role="row" class="even">
                                    <td>18.485.623-5</td>
                                    <td>Maria Elena Castro Castro</td>
                                    <td>21/01/2020</td>
                                    <td>I G8 J1</td>
                                    <td>21/01/2021</td>
                                    <td>1</td>
                                    <td>Vigente</td>
                                    <td>01/02/2020</td>
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
