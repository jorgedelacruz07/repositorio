<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Repositorio Académico</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- <link href='fonts/Ubuntu/Ubuntu-Regular.ttf' rel='stylesheet' type='text/css'> -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/stylesheets.css">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/perfil.css">
	<link rel="stylesheet" type="text/css" href="css/recientes.css">
	<link rel="stylesheet" type="text/css" href="css/perfil.css">
	<link rel="stylesheet" type="text/css" href="css/cursos.css">


</head>
<body>

	@yield('particulas')

	<div class="header">
		<div class="header-center">
			<div class="header-in">
				<h1>Repositorio Académico</h1>
			</div>
		</div>
	</div>

	<div class="contenido">
		<div class="contenido-in">
		 	@yield('content')
		</div>
	</div>
	
	<div class="footer">
		<div class="footer-in">
			<div class="footer-logo">
				<ul class="footer-address">
					<li>Oficina Principal</li>
					<li>Universidad Nacional Mayor de San Marcos</li>
					<li>Cercado de Lima, Lima</li>
				</ul>
			</div>

			<div class="footer-services">
				<h3>SERVICIOS</h3>
				<ul class="list-services">
					<li><a href="{{ url('cursos') }}" class="footer-services-list">Cursos</a></li>
					<li><a href="{{ url('recientes') }}" class="footer-services-list">Recientes</a></li>
					<li><a href="{{ url('subir') }}" class="footer-services-list">Subir</a></li>
				</ul>
			</div>
		</div>        
    </div>

	<script src="js/particles.js"></script>
	<script src="js/particulas.js"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/query.js"></script>

	
	<!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</body>
</html>