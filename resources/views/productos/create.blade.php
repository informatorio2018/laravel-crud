@extends('main')

@section('contenido')
	
	<h2>Nuevo Producto</h2>

	{!! Form::open(['action' => 'ProductosController@store',
					'method'=>'POST',
					'file'=>true,
					'enctype'=>'multipart/form-data',
					'class'=>'form']) !!}

		<div class="form-group">
    		{{ Form::label('codArticulo','codArticulo') }}
    		{{ Form::text('codArticulo','',(['class'=>'form-control'])) }}
		</div>

		<div class="form-group">
    		{{ Form::label('producto','Producto') }}
    		{{ Form::text('producto','',(['class'=>'form-control','placeholder'=>'Ingrese el Producto'])) }}
		</div>
    	<div class="form-group">
    		{{ Form::label('descripcion','Descripcion') }}
    		{{ Form::text('descripcion','',(['class'=>'form-control','placeholder'=>'Descripcion'])) }}
		</div>

		<div class="form-group">
    		{{ Form::label('foto','Foto') }}
    		{{ Form::file('foto',(['class'=>'form-control-file'])) }}
		</div>
		
		<select name="categoria_id" id="" class="from-control">
			@foreach($categorias as $categoria)
			<option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
			@endforeach
		</select>

		{{ Form::submit('Guardar',(['class'=>'btn btn-info'])) }}
	{!! Form::close() !!}
	
@endsection