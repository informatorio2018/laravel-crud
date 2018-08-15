<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
	
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/clientes') }}">Clientes</a>

						<div class="container">
								@yield('contenido')
						</div>
	

                    {{-- @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                   
                    @endauth --}}
	{{-- @include('partials.navbar') --}}
	
	
</body>
</html>