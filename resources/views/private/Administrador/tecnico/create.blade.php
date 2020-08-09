<button class="btn btn-primary" data-toggle="modal" data-target="#create">Agregar Técnico <i class="fas fa-plus"></i></button>

<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="create" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route' => 'mantenedor-tecnico.store', 'method' => 'POST']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Nuevo Técnico
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-md-9">
                        <label for="">Rut</label>
                        {!!Form::number('rut',null,['class'=>"form-control", 'placeholder'=>"Ingrese numero" , 'required', 'maxlength'=>"8"])!!}
                    </div>
                    <div class="col-md-1">
                        <br>
                        <br>-
                    </div>
                    <div class="col-md-2">
                        <label for="">DV</label>
                        {!!Form::text('dv',null,['class'=>"form-control", 'placeholder'=>"" , 'required', 'maxlength'=>"1"])!!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label class="form-control-label">
                            Nombres
                        </label>
                        {!!Form::text('nombres',null,['class'=>'form-control','placeholder'=>'Ingrese nombres...','required'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label class="form-control-label">
                            Apellido Paterno
                        </label>
                        {!!Form::text('apellido_paterno',null,['class'=>'form-control','placeholder'=>'Ingrese apellido...','required'])!!}
                    </div>
                    <div class="col">
                        <label class="form-control-label">
                            Apellido Materno
                        </label>
                        {!!Form::text('apellido_materno',null,['class'=>'form-control','placeholder'=>'Ingrese apellido...','required'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-control-label">
                            Especialidad
                        </label>
                        {!!Form::text('especialidad',null,['class'=>'form-control','placeholder'=>'Ingrese especialidad...','required'])!!}
                    </div>
                    <div class="col-md-6">
                        <label class="form-control-label">
                            Fecha Nacimiento
                        </label>
                        {!!Form::date('fecha_nacimiento',null,['class'=>'form-control','required'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label class="form-control-label">
                            Email
                        </label>
                        {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese correo...','required'])!!}
                    </div>
                    <div class="col">
                        <label class="form-control-label">
                            Contraseña
                        </label>
                        <input name="password" class="form-control last" type="password" placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Cerrar
                </button>
                <button class="btn btn-primary">
                    Registrar
                </button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>