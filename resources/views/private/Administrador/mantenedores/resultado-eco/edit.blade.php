<a href="" type="button "class="on-default remove-row" data-toggle="modal" data-target="#edit">
    <i class="fas fa-pencil-alt"></i>
</a>

<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edit" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Editar Paciente: Maria Elena Castro Castro
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group row">
                  <div class="col-md-12">
                      <label for="">Nombre</label>
                      {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese valor" , 'required', 'maxlength'=>"8"])!!}
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