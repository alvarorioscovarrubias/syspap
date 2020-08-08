<button class="btn btn-success btn-sm mr-1" data-toggle="modal" data-target="#edit_{{ $grupo->id }}">
    <i class="fas fa-pencil-alt"></i>
</button>

<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edit_{{ $grupo->id }}" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route' => ['mantenedor-grupo-edad.update',$grupo->id], 'method' => 'PUT']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Editar Grupo Edad: {{ $grupo->nombre }}
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                  <div class="col-md-12">
                      <label for="">Grupo de Edad</label>
                      {!!Form::text('nombre',$grupo->nombre,['class'=>"form-control" , 'required'])!!}
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