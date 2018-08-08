@extends('main')

@section('contenido')
	<h1>Mostrando </h1>
	<h1><strong>Cliente:</strong>{{$cliente->nombre}} </h1>

	<h2><strong>Direccion:</strong> {{$cliente->direccion}}</h2>

	<img src="{{$cliente->foto}}" alt="">
	<br>
	<br>
	<a href="{{url('/clientes')}}" class="btn btn-success">Volver</a>
	<a href="" class="btn btn-info">Editar</a>

@endsection