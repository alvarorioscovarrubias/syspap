@extends('layouts.new_private.master')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                </div>
                <h2 class="card-title">Grupo edad</h2>
            </header>
            <div class="card-body" style="display: block;">
            
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                        @include('private.Administrador.mantenedores.grupo-edad.create')
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
                                <td>15-19</td>
                                <td class="actions">
                                    @include('private.Administrador.mantenedores.grupo-edad.edit')
                                    @include('private.Administrador.mantenedores.grupo-edad.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="even">
                                <td>2</td>
                                <td>20-24</td>
                                <td class="actions">
                                    @include('private.Administrador.mantenedores.grupo-edad.edit')
                                    @include('private.Administrador.mantenedores.grupo-edad.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="odd">
                                <td>3</td>
                                <td>25-29</td>
                                <td class="actions">
                                    @include('private.Administrador.mantenedores.grupo-edad.edit')
                                    @include('private.Administrador.mantenedores.grupo-edad.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="even">
                                <td>4</td>
                                <td>30-34</td>
                                <td class="actions">
                                @include('private.Administrador.mantenedores.grupo-edad.edit')
                                    @include('private.Administrador.mantenedores.grupo-edad.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="odd">
                                <td>5</td>
                                <td>35-39</td>
                                <td class="actions">
                                @include('private.Administrador.mantenedores.grupo-edad.edit')
                                    @include('private.Administrador.mantenedores.grupo-edad.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="even">
                                <td>6</td>
                                <td>40-44</td>
                                <td class="actions">
                                @include('private.Administrador.mantenedores.grupo-edad.edit')
                                    @include('private.Administrador.mantenedores.grupo-edad.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="odd">
                                <td>7</td>
                                <td>45-49</td>
                                <td class="actions">
                                @include('private.Administrador.mantenedores.grupo-edad.edit')
                                    @include('private.Administrador.mantenedores.grupo-edad.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="even">
                                <td>8</td>
                                <td>50-54</td>
                                <td class="actions">
                                @include('private.Administrador.mantenedores.grupo-edad.edit')
                                    @include('private.Administrador.mantenedores.grupo-edad.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="odd">
                                <td>9</td>
                                <td>55-59</td>
                                <td class="actions">
                                @include('private.Administrador.mantenedores.grupo-edad.edit')
                                    @include('private.Administrador.mantenedores.grupo-edad.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="even">
                                <td>10</td>
                                <td>60-64</td>
                                <td class="actions">
                                @include('private.Administrador.mantenedores.grupo-edad.edit')
                                    @include('private.Administrador.mantenedores.grupo-edad.destroy')
                                </td>
                            </tr>
                            <tr data-item-id="7" role="row" class="odd">
                                <td>11</td>
                                <td>65 y mas</td>
                                <td class="actions">
                                @include('private.Administrador.mantenedores.grupo-edad.edit')
                                    @include('private.Administrador.mantenedores.grupo-edad.destroy')
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
