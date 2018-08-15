@extends('main')

@section('contenido')
	
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>CodArticulo</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Imagen</th>
			</tr>
		</thead>
		<tbody>
			@foreach($productos as $producto)
			<tr>
				<td>{{$producto->id}}</td>
				<td>{{$producto->codArt}}</td>
				<td>{{$producto->producto}}</td>
				<td>{{$producto->descripcion}}</td>
				<td><img src="{{$producto->foto}}" alt="" width="200px">	</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$productos->render()}}
@endsection