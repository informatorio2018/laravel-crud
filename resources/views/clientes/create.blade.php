@extends('main')

@section('contenido')
	
	<h2>Nuevo Cliente</h2>

	{!! Form::open(['action' => 'ClientesController@store',
					'method'=>'POST',
					'file'=>true,
					'enctype'=>'multipart/form-data',
					'class'=>'form']) !!}


		<div class="form-group">
    		{{ Form::label('nombre','Nombre') }}
    		{{ Form::text('nombre','',(['class'=>'form-control','placeholder'=>'Ingrese su nombre'])) }}
		</div>
    	<div class="form-group">
    		{{ Form::label('direccion','Direccion') }}
    		{{ Form::text('direccion','',(['class'=>'form-control','placeholder'=>'Ingrese su direccion'])) }}
		</div>

		<div class="form-group">
    		{{ Form::label('foto','Foto') }}
    		{{ Form::file('foto',(['class'=>'form-control-file'])) }}
		</div>
		

		{{ Form::submit('Guardar',(['class'=>'btn btn-info'])) }}
	{!! Form::close() !!}
	
@endsection