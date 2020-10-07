@extends('layouts.new_private.master')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                </div>
                <h2 class="card-title">Mi Perfil</h2>
            </header>
            <div class="card-body" style="display: block;">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <form class="p-3">
                                <h4 class="mb-3">Personal Information</h4>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <hr class="dotted tall">
                                <h4 class="mb-3">Change Password</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">New Password</label>
                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword5">Re New Password</label>
                                        <input type="password" class="form-control" id="inputPassword5" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 text-right mt-3">
                                        <button class="btn btn-primary modal-confirm">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@stop
