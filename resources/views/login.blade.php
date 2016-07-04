@extends ('layouts.layout')

@section ('content')

	<div class="container col-md-6 col-md-offset-3">
		<form action="{{ url('perfil') }}" class="form-horizontal" method="post" autocomplete="off">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="id_usuario" class="control-label col-md-3">ID</label>
				<div class="col-md-9">
					<input type="text" class="form-control" name="id_usuario" id="id_usuario" placeholder="ID de usuario">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="control-label col-md-3">Password</label>
				<div class="col-md-9">
					<input type="password" class="form-control" name="password" id="password">
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox col-md-9 col-md-offset-3">
					<label>
						<input type="checkbox">Recuérdame
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3 col-md-offset-3">
					<button class="btn btn-primary">Enviar</button>
				</div>
			</div>
		</form>
	</div>

@stop