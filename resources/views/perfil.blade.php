@extends ('layouts.layout')

@section ('content')
	<div class="perfil-left">
		<h3>
			<?php 
				echo $usuario->nombre_usuario." ".$usuario->apellidos_usuario;
			 ?>
		</h3>
		<div class="images">
			<img src="rsc/perfil.png" alt="">
		</div>
	</div>

	<div class="perfil-right">
		<ul class="options">
			<li><a href="{{ url('recientes') }}">Ver repositorio</a></li>
			<li><a href="{{ url('cursos') }}">Ver cursos</a></li>
			<li><a href="{{ url('subir') }}">Subir archivo</a></li>
		</ul>
	</div>

@stop