@extends ('layouts.layout')

@section ('content')

	<div class="container col-md-6 col-md-offset-3">
		<form action="{{ url('login') }}" class="form-horizontal">
			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<h5>Si ya tienes una cuenta, <a href="{{ url('login') }}">entra aquí</a></h5>
				</div>
			</div>
			<div class="form-group">
				<label for="nombre" class="control-label col-md-3">Código</label>
				<div class="col-md-9">
					<input type="text" class="form-control" id="nombre" placeholder="Ej. 13200049">
				</div>
			</div>
			<div class="form-group">
				<label for="nombre" class="control-label col-md-3">Nombres</label>
				<div class="col-md-9">
					<input type="text" class="form-control" id="nombre" placeholder="Ej. Juan Antonio">
				</div>
			</div>
			<div class="form-group">
				<label for="apellidos" class="control-label col-md-3">Apellidos</label>
				<div class="col-md-9">
					<input type="text" class="form-control" id="apellidos" placeholder="Ej. Perez Durán">
				</div>
			</div>
			<div class="form-group">
				<label for="contraseña" class="control-label col-md-3">Contraseña</label>
				<div class="col-md-9">
					<input type="password" class="form-control" id="contraseña">
				</div>
			</div>
			<div class="form-group">
				<label for="contraseña2" class="control-label col-md-3">Repetir contraseña</label>
				<div class="col-md-9">
					<input type="password" class="form-control" id="contraseña2">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<label for="hombre" class="radio-inline">
						<input type="radio" name="id_sexo" id="hombre">Hombre
					</label>
					<label for="mujer" class="radio-inline">
						<input type="radio" name="id_sexo" id="mujer">Mujer
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<label for="administradaor" class="radio-inline">
						<input type="radio" name="id_tipo_usuario" id="administradaor">Administrador
					</label>
					<label for="alumno" class="radio-inline">
						<input type="radio" name="id_tipo_usuario" id="alumno">Alumno
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox col-md-9 col-md-offset-3">
					<label>
						<input type="checkbox">Acepto términos y restricciones
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