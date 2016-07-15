@extends ('layouts.layout')

@section ('content')
	<div class="container col-md-6 col-md-offset-3">
		<div class="title">
			<h2 class="text-primary">SUBIR DOCUMENTO</h2>
		</div>
		<hr>
		<br><br>
		<form action="{{ url('subir') }}" class="form-horizontal" method="post" autocomplete="off" accept-charset="UTF-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<div class="form-group">
				<label for="direccion_archivo" class="control-label col-md-4">Archivo</label>
				<div class="col-md-8">
					<input type="file" id="direccion_archivo" name="direccion_archivo" class="file" value="" required>
					<p class="help-block">Maximo 50MB</p>
				</div>
			</div>
			<div class="form-group">
				<label for="tipo_documento" class="control-label col-md-4">Tipo de documento</label>
				<div class="col-md-8">
				<?php $var = 1; ?>
					<?php foreach ($tipo_documentos as $tipo_documento): ?>
						<label for="tipo_documento_<?= $var ?>" class="radio-inline">
							<input type="radio" id="tipo_documento_<?= $var ?>" name="tipo_documento" class="option" value="" required>
							<?= $tipo_documento->nombre_tipo_doc; ?>
						</label>
						<?php $var++;  ?>
					<?php endforeach ?>
				</div>
			</div>
			<div class="form-group">
				<label for="extension_documento" class="control-label col-md-4">Extensión</label>
				<div class="col-md-8">
				<?php $var = 1; ?>
					<?php foreach ($extension_documentos as $extension_documento): ?>
						<label for="extension_documento_<?= $var ?>" class="radio-inline">
							<input type="radio" id="extension_documento_<?= $var ?>" name="extension_documento" class="option" value="" required>
							<?= $extension_documento->nombre_extension_doc; ?>
						</label>
						<?php $var++;  ?>
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