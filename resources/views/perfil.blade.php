@extends ('layouts.layout')

@section ('content')

	<div class="container">
		<div class="col-md-6">
			<div class="col-md-12">
				<h2 class="text-muted text-uppercase text-danger"><?= $usuario->nombre_usuario." ".$usuario->apellidos_usuario; ?></h2>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="col-md-8 col-md-offset-2">
				<img src="<?= $ruta.$usuario->alumno->dir_fotografia; ?>" alt="" class="img-responsive img-circle">
			</div>
		</div>
		<div class="col-md-6">
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="form">
				<div class="form-group">
					<label for="" class="control-label col-md-4 text-primary">Email</label>
					<div class="col-md-8">
						<p><?= $usuario->alumno->email; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-4 text-primary">Sexo</label>
					<div class="col-md-8">
						<p><?= $usuario->sexo->nombre_sexo; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-4 text-primary">Estado de usuario</label>
					<div class="col-md-8">
						<p><?= $usuario->estado_usuario->nombre_estado_usuario; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-4 text-primary">Tipo de usuario</label>
					<div class="col-md-8">
						<p><?= $usuario->tipo_usuario->nombre_tipo_usuario; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-4 text-primary">Escuela Académica</label>
					<div class="col-md-8">
						<p><?= $usuario->alumno->eap_alumno->nombre_eap; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-4 text-primary">Teléfono</label>
					<div class="col-md-8">
						<p><?= $usuario->alumno->telef_contacto; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-4 text-primary">Puntos obtenidos</label>
					<div class="col-md-8">
						<p><?= $usuario->alumno->puntos_alumno; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-4 text-primary">Faltas</label>
					<div class="col-md-8">
						<p><?= $usuario->alumno->numero_faltas; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-4 text-primary">Dirección</label>
					<div class="col-md-8">
						<p><?= $usuario->alumno->direccion_actual.", ".$usuario->alumno->distrito->nombre_distrito.", ".$usuario->alumno->distrito->provincia->nombre_provincia.", ".$usuario->alumno->distrito->provincia->departamento->nombre_departamento ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop