@extends ('layouts.layout')

@section ('content')

	<div class="container">
		<h2 class="text-muted text-uppercase"><?= $usuario->nombre_usuario." ".$usuario->apellidos_usuario; ?> <small>(Alumno)</small></h2>
		
		<div class="row">
			<div class="col-md-2">
				<img src="<?= $ruta.$usuario->alumno->dir_fotografia; ?>" alt="" class="img-responsive img-circle">
			</div>
		</div>

		<p>
			Email: 
			<?= $usuario->alumno->email; ?>
		</p>
		<p>
			Sexo:
			<?= $usuario->sexo->nombre_sexo; ?>
		</p>
		<p>
			Estado de usuario:
			<?= $usuario->estado_usuario->nombre_estado_usuario; ?>
		</p>
		<p>
			Tipo de usuario:
			<?= $usuario->tipo_usuario->nombre_tipo_usuario; ?>
		</p>
		<p>
			Escuela Académica:
			<?= $usuario->alumno->eap_alumno->nombre_eap; ?>
		</p>
		<p>
			Teléfono:
			<?= $usuario->alumno->telef_contacto; ?>
		</p>
		<p>
			Puntos obtenidos:
			<?= $usuario->alumno->puntos_alumno;  ?>
		</p>
		<p>
			Faltas:
			<?= $usuario->alumno->numero_faltas; ?>
		</p>
		<p>
			Dirección:
			<?= $usuario->alumno->direccion_actual.", ".$usuario->alumno->distrito->nombre_distrito.", ".$usuario->alumno->distrito->provincia->nombre_provincia.", ".$usuario->alumno->distrito->provincia->departamento->nombre_departamento ?>
		</p>
	</div>

@stop