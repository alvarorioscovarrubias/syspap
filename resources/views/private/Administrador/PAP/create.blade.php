<button class="btn btn-primary" data-toggle="modal" data-target="#create">Agregar PAP <i class="fas fa-plus"></i></button>

<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="create" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Nuevo PAP
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group row">
                  <div class="col-md-12">
                      <label for="">Rut</label>
                      {!!Form::number('rut',null,['class'=>"form-control", 'placeholder'=>"Ingrese numero" , 'required', 'maxlength'=>"8"])!!}
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label class="form-control-label">
                            Fecha Examen
                        </label>
                        {!!Form::date('fecha_nacimiento',null,['class'=>'form-control','placeholder'=>'Ingrese texto...','required'])!!}
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label">
                            Fecha Citación
                        </label>
                        {!!Form::date('fecha_nacimiento',null,['class'=>'form-control','placeholder'=>'Ingrese texto...','required'])!!}
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label">
                            Fecha Resultado
                        </label>
                        {!!Form::date('fecha_nacimiento',null,['class'=>'form-control','placeholder'=>'Ingrese texto...','required'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg">
                        <label class="form-control-label">
                            Resultado
                        </label>
                        <select class="form-control" multiple="multiple" data-plugin-multiselect="" data-plugin-options="{ &quot;maxHeight&quot;: 200 }" id="ms_example0" style="display: none;">
                            <option value="1">I</option>
                            <option value="2">G8</option>
                            <option value="3">J1</option>
                        </select>
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