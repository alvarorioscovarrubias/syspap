{!! Form::open(['route'=>['mantenedor-resultado-eco.delete',$res->id],'method'=>'delete']) !!}
	<button class="btn btn-danger btn-sm" onclick="return confirm('¿Quiere borrar el registro?')">
		<i class="far fa-trash-alt"></i>
	</button>
{!! Form::close() !!}