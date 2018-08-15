@extends('main')

@section('contenido')
	<a href="{{url('/clientes/create')}}" class="btn btn-primary">Nuevo Cliente</a>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Direccion</th>
				<th>Foto</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($clientes as $cliente)
			<tr>
				<td>{{$cliente->id}}</td>
				<td>{{$cliente->nombre}}</td>
				<td>{{$cliente->direccion}}</td>

				<td><img src="{{$cliente->foto}}" alt="" width="200px"></td>
				<td>
					<a href="{{route('clientes.show',$cliente->id)}}" class="btn btn-primary">Ver</a>
					<a href="{{route('clientes.edit',$cliente->id)}}" class="btn btn-info">Editar</a>
				
					{!! Form::open(['route'=>['clientes.destroy',$cliente->id],'method'=>'DELETE']) !!}
					
					<button class="btn btn-danger" >Eliminar</button>
					{!! Form::close() !!}				

				</td>
			
			</tr>
			@endforeach
		</tbody>
	</table>

	{{$clientes->render()}}
@endsection