{!! Form::open(['route'=>['configuracion.delete',$config->id],'method'=>'delete']) !!}
	<button class="mb-1 mt-1 mr-1 btn btn-xs btn btn-danger" onclick="return confirm('¿Quiere borrar el registro?')"
	><i class="fas fa-trash-alt"></i></button>
{!! Form::close() !!} 