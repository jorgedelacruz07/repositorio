<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FisiZilla</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<header>
		<div class="container">
			<header>
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar-header">
								<a class="navbar-brand" href="#">FISIZILLA</a>
							</div>
						</div>

						<div class="collapse navbar-collapse" id="navbar1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="{{ url('perfil') }}">Perfil</a></li>
								<li><a href="{{ url('cursos') }}">Cursos</a></li>
								<li class="dropdown">
									<a href=	"" class="dropdown-toggle" data-toggle="dropdown" role="button">
										Documentos
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="{{ url('recientes') }}">Recientes</a></li>
										<li class="divider"></li>
										<li><a href="{{ url('recientes') }}">Evaluaciones</a></li>
										<li><a href="{{ url('recientes') }}">Bibliografías</a></li>
										<li><a href="{{ url('recientes') }}">Clases</a></li>
									</ul>
								</li>
								<li><a href="{{ url('subir') }}">Subir</a></li>
							</ul>

							<form action="" class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Buscar">
								</div>
							</form>

							<div class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">
										Configuración
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="{{ url('login') }}">Login</a></li>
										<li><a href="{{ url('registro') }}">Registrarse</a></li>
										<li><a href="#">Ajustes</a></li>
										<li class="divider"></li>
										<li><a href="{{ url('logout') }}">Cerrar sesión</a></li>
									</ul>
								</li>
							</div>
						</div>
					</div>
				</nav>
			</header>
		</div>
	</header>
	
	<article class="contenido">
		<br><br>
		<br><br>
		<br><br>
		@yield('content')
		<br><br>
		<br><br>
		<br><br>
	</article>
	
	<aside>
	
	</aside>
	
	<footer>
		<nav class="navbar navbar-default navbar-fixed-bottom">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Producido por FISIZILLA</a>
				</div>
				<div class="collapse navbar-collapse">
					<div class="nav navbar-nav navbar-right">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{ url('perfil') }}">Perfil</a></li>
							<li><a href="{{ url('cursos') }}">Cursos</a></li>
							<li><a href="{{ url('recientes') }}">Documentos</a></li> 
							<li><a href="{{ url('subir') }}">Subir</a></li> 
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</footer>

	<!-- Dropdown -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<!-- Básico -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>