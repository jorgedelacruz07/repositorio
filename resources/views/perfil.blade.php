@extends ('layouts.layout')

@section ('content')

	<div>
		<?php 
			echo $usuario->nombre_usuario." ".$usuario->apellidos_usuario;
		 ?>
	</div>

	<div class="perfil-images">
		<img src="rsc/perfil.png" alt="">
	</div>
	<div class="perfil-list">
		<ul class="list-funciones">
			<a href="/repositorio_academico/public/recientes"><li>Ver repositorio</li></a>
			<a href="/repositorio_academico/public/cursos"><li>Ver cursos</li></a>
			<a href="/repositorio_academico/public/subir"><li>Subir archivo</li></a>
		</ul>
	</div>

@stop