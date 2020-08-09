<button class="btn btn-success btn-sm mr-1" data-toggle="modal" data-target="#edit_{{ $tec->id }}">
    <i class="fas fa-pencil-alt"></i>
</button>

<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edit_{{ $tec->id }}" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        {!! Form::open(['route' => ['mantenedor-tecnico.update',$tec->id], 'method' => 'PUT']) !!}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Editar Técnico: {{ $tec->nombres }}
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-md-9">
                        <label for="">Rut</label>
                        {!!Form::number('rut',$tec->rut,['class'=>"form-control", 'required', 'maxlength'=>"8"])!!}
                    </div>
                    <div class="col-md-1">
                        <br>
                        <br>-
                    </div>
                    <div class="col-md-2">
                        <label for="">DV</label>
                        {!!Form::text('dv',$tec->dv,['class'=>"form-control", 'required', 'maxlength'=>"1"])!!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label class="form-control-label">
                            Nombres
                        </label>
                        {!!Form::text('nombres',$tec->nombres,['class'=>'form-control','required'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label class="form-control-label">
                            Apellido Paterno
                        </label>
                        {!!Form::text('apellido_paterno',$tec->apellido_paterno,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="col">
                        <label class="form-control-label">
                            Apellido Materno
                        </label>
                        {!!Form::text('apellido_materno',$tec->apellido_materno,['class'=>'form-control','required'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-control-label">
                            Especialidad
                        </label>
                        {!!Form::text('especialidad',$tec->especialidad,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="col-md-6">
                        <label class="form-control-label">
                            Fecha Nacimiento
                        </label>
                        {!!Form::date('fecha_nacimiento',$tec->fecha_nacimiento,['class'=>'form-control','required'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label class="form-control-label">
                            Email
                        </label>
                        {!!Form::email('email',$tec->email,['class'=>'form-control','required'])!!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Cerrar
                </button>
                <button class="btn btn-primary">
                    Actualizar
                </button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>