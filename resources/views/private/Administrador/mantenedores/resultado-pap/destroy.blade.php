{{-- Form::open(['route'=>['mantenedor-proyecto.delete',$pro->id],'method'=>'delete']) --}}
	<a href="#" class="on-default remove-row" onclick="return confirm('¿Quiere borrar el registro?')"><i class="far fa-trash-alt"></i></a>
{{-- Form::close() --}}