@extends('layouts.new_private.master')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                </div>
                <h2 class="card-title">Ecotomografía</h2>
            </header>
            <div class="card-body" style="display: block;">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            @include('private.Tecnico.ecotomografia.create')
                        </div>
                    </div>
                </div>
                <div id="datatable-editable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
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
                                <td>21/01/2018</td>
                                <td>BIRADS 3</td>
                                <td>21/01/2021</td>
                                <td>3</td>
                                <td>Vigente</td>
                                <td>01/02/2020</td>
                                <td class="actions">
                                    @include('private.Tecnico.ecotomografia.edit')
                                </td>
                            </tr>
                            <tr data-item-id="8" role="row" class="even">
                                <td>18.485.623-5</td>
                                <td>Maria Elena Castro Castro</td>
                                <td>21/01/2018</td>
                                <td>BIRADS 0</td>
                                <td>21/01/2021</td>
                                <td>3</td>
                                <td>Vigente</td>
                                <td>01/02/2020</td>
                                <td class="actions">
                                    @include('private.Tecnico.ecotomografia.edit')
                                </td>
                            </tr>
                            <tr data-item-id="8" role="row" class="even">
                                <td>18.485.623-5</td>
                                <td>Maria Elena Castro Castro</td>
                                <td>21/01/2018</td>
                                <td>BIRADS 2</td>
                                <td>21/01/2021</td>
                                <td>3</td>
                                <td>Vigente</td>
                                <td>01/02/2020</td>
                                <td class="actions">
                                    @include('private.Tecnico.ecotomografia.edit')
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
