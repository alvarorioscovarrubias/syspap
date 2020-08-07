<button class="btn btn-primary" data-toggle="modal" data-target="#create">Agregar Matrón <i class="fas fa-plus"></i></button>

<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="create" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Nuevo Matrón
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
                    Registrar
                </button>
            </div>
        </div>
    </div>
</div>