@extends ('layouts.layout')

@section ('content')

	<div class="container col-md-6 col-md-offset-3">
		<form action="{{ url('subir') }}" class="form-horizontal" method="post" autocomplete="off" accept-charset="UTF-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<div class="form-group">
				<label for="direccion_archivo" class="control-label col-md-4">Archivo:</label>
				<div class="col-md-8">
					<input type="file" id="direccion_archivo" name="direccion_archivo" class="file" required>
					<p class="help-block">Maximo 1TB</p>
				</div>
			</div>
			<div class="form-group">
				<label for="usuario" class="control-label col-md-4">Tipo de documento</label>
				<div class="col-md-8">
					<?php foreach ($tipo_documentos as $tipo_documento): ?>
						<label for="tipo_documento" class="radio-inline">
							<input type="radio" id="tipo_documento" name="tipo_documento" class="option">
							<?= $tipo_documento->nombre_tipo_doc; ?>
						</label>
					<?php endforeach ?>
				</div>
			</div>
			<div class="form-group">
				<label for="usuario" class="control-label col-md-4">Extensión</label>
				<div class="col-md-8">
					<?php foreach ($extension_documentos as $extension_documento): ?>
						<label for="extension_documento" class="radio-inline">
							<input type="radio" id="extension_documento" name="extension_documento" class="option">
							<?= $extension_documento->nombre_extension_doc; ?>
						</label>
					<?php endforeach ?>
				</div>
			</div>
			<br>
			<div class="form-group">
				<div class="col-md-4 col-md-offset-4">
					<button class="btn btn-primary">Subir</button>
				</div>
			</div>
		</form>
	</div>


@stop