<button class="btn btn-primary" data-toggle="modal" data-target="#create">Agregar Nunca EFM <i class="fas fa-plus"></i></button>

<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="create" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route' => 'mantenedor-nunca.store', 'method' => 'POST']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Nunca EFM
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                  <div class="col-md-12">
                      <label for="">Nombre</label>
                      {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese nombre" , 'required'])!!}
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