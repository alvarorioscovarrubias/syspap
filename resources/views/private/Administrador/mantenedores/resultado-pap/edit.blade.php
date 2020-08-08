<button class="btn btn-success btn-sm mr-1" data-toggle="modal" data-target="#edit_{{ $res->id }}">
    <i class="fas fa-pencil-alt"></i>
</button>

<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edit_{{ $res->id }}" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route' => ['mantenedor-res-pap.update',$res->id], 'method' => 'PUT']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Editar Resultado: {{ $res->nombre }}
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                  <div class="col-md-12">
                      <label for="">Nombre</label>
                      {!!Form::text('nombre',$res->nombre,['class'=>"form-control" , 'required'])!!}
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