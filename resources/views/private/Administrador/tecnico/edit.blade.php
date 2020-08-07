<a href="" type="button "class="on-default remove-row" data-toggle="modal" data-target="#edit">
    <i class="fas fa-pencil-alt"></i>
</a>

<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edit" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Editar Técnico
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group row">
                    <div class="col">
                        <label class="form-control-label">
                            Nombres
                        </label>
                        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese texto...','required'])!!}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <label class="form-control-label">
                            Apellido Paterno
                        </label>
                        {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese texto...','required'])!!}
                    </div>
                    <div class="col">
                        <label class="form-control-label">
                            Apellido Materno
                        </label>
                        {!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingrese texto...','required'])!!}
                    </div>
                </div>

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
                      {!!Form::text('dv',null,['class'=>"form-control", 'placeholder'=>"Ingrese texto" , 'required', 'maxlength'=>"1"])!!}
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label class="form-control-label">
                            Especialidad
                        </label>
                        {!!Form::number('altura',null,['class'=>'form-control','placeholder'=>'Ingrese texto...','required'])!!}
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label">
                            Sexo
                        </label>
                        {!!Form::text('peso',null,['class'=>'form-control','placeholder'=>'Ingrese texto...','required'])!!}
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label">
                            Fecha Nacimiento
                        </label>
                        {!!Form::date('fecha_nacimiento',null,['class'=>'form-control','placeholder'=>'Ingrese texto...','required'])!!}
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
        </div>
    </div>
</div>