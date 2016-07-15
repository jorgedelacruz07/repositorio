@extends ('layouts.layout')

@section ('content')

	<div class="container col-md-6 col-md-offset-3">
		<div class="title">
			<h2 class="text-primary">REGISTRO</h2>
		</div>
		<hr>
		<br>
		<form action="{{ url('registro') }}" class="form-horizontal" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<h5>Si ya tiene una cuenta, <a href="{{ url('login') }}">entrar aquí</a></h5>
				</div>
			</div>
			<div class="form-group">
				<label for="id_usuario" class="control-label col-md-3">Código</label>
				<div class="col-md-9">
					<input type="text" class="form-control" name="id_usuario" id="id_usuario" value="" placeholder="Ej. 13200049" required>
				</div>
			</div>
			<div class="form-group">
				<label for="nombre_usuario" class="control-label col-md-3">Nombres</label>
				<div class="col-md-9">
					<input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" value="" placeholder="Ej. Juan Antonio" required>
				</div>
			</div>
			<div class="form-group">
				<label for="apellidos_usuario" class="control-label col-md-3">Apellidos</label>
				<div class="col-md-9">
					<input type="text" class="form-control" name="apellidos_usuario" id="apellidos_usuario" value="" placeholder="Ej. Perez Durán" required>
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="control-label col-md-3">Contraseña</label>
				<div class="col-md-9">
					<input type="password" class="form-control" name="password" id="password" value="" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<?php foreach ($sexos as $sexo): ?>
						<label for="<?= $sexo->nombre_sexo ?>" class="radio-inline">
							<input type="radio" name="id_sexo" value="<?= $sexo->id_sexo ?>" id="<?= $sexo->nombre_sexo ?>"><?= $sexo->nombre_sexo ?>
						</label>
					<?php endforeach ?>
				</div>
			</div>

			<div class="form-group">
				<label for="option" class="control-label col-md-3">Escuela Académica</label>
				<div class="col-md-9">
					<select name="" id="option" class="form-control" required>
						<option value="" selected disabled>Elija una opción</option>
						<?php foreach ($eap_alumnos as $eap_alumno): ?>
							<option value="<?= $eap_alumno->id_eap ?>" id=""><?= $eap_alumno->nombre_eap ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="telef_contacto" class="control-label col-md-3">Teléfono</label>
				<div class="col-md-9">
					<input type="number" class="form-control" name="telef_contacto" id="telef_contacto" value="" placeholder="Ej. 993914123">
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="control-label col-md-3">E-mail</label>
				<div class="col-md-9">
					<input type="mail" class="form-control" name="email" id="email" value="" placeholder="example@gmail.com" required>
				</div>
			</div>
			<div class="form-group">
				<label for="dir_fotografia" class="control-label col-md-3">Archivo</label>
				<div class="col-md-9">
					<input type="file" id="dir_fotografia" name="dir_fotografia" class="file" value="">
					<p class="help-block">Maximo 10MB</p>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="control-label col-md-3">Departamento</label>
				<div class="col-md-9">
					<select name="" id="" class="form-control category-1">
						<option value="" selected disabled>Departamento</option>
						<?php foreach ($departamentos as $departamento): ?>
							<option value="<?= $departamento->ubigeo_departamento ?>"><?= $departamento->nombre_departamento ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="control-label col-md-3">Provincia</label>
				<div class="col-md-9">
					<select name="" id="" class="form-control category-1">
						<option value="" selected disabled>Provincia</option>
						<option value=""></option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<div class="checkbox col-md-9 col-md-offset-3">
					<label>
						<input type="checkbox" value="" required>Acepto términos y restricciones
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3 col-md-offset-3">
					<button class="btn btn-primary">Registrar</button>
				</div>
			</div>
		</form>
	</div>

@stop