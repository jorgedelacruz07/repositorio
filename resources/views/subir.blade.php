@extends ('layouts.layout')

@section ('content')
	<div class="content-upload">
		<div class="title">
			<h1>SUBIR</h1>
		</div>
		<div class="form-subir">
	        <form action="{{ url('subir') }}" method="post" autocomplete="off" accept-charset="UTF-8" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

				<div class="form-group">
					<label for="estado_doc">Estado del documento (1-5)</label>
					<select name="estado_doc" id="estado_doc" class="option">
						<option value="01">1</option>
						<option value="02">2</option>
						<option value="03">3</option>
						<option value="04">4</option>
						<option value="05">5</option>
					</select>
				</div>

				<div class="form-group">
					<label for="direccion_archivo">Archivo</label>
					<input type="file" id="direccion_archivo" name="direccion_archivo" class="option" required>
				</div>
				
				<div class="form-group">
					<label for="id_tipo_doc">Tipo de Documento</label>
					<!-- <select name="id_tipo_doc" id="id_tipo_doc" class="option"> -->
					<?php foreach ($tipo_documentos as $tipo_documento): ?>
						
						<!-- <option value="<?= $tipo_documento->id_tipo_doc; ?>" > <?= $tipo_documento->nombre_tipo_doc; ?> </option> -->
					<?php endforeach ?>
					</select>
				</div>

				<div class="form-group">
					<label for="extension_documentos">Extensión del Documento</label>
					<!-- <select name="extension_documentos" id="extension_documentos" class="option"> -->
					<?php foreach ($extension_documentos as $extension_documento): ?>
						<input type="radio" id="extension_documento" name="extension_documento" class="option">
						<label for="extension_documento"><?= $extension_documento->nombre_extension_doc; ?></label>
						<!-- <option value="<?= $extension_documento->id_extension_doc; ?>" > <?= $extension_documento->nombre_extension_doc; ?> </option> -->
					<?php endforeach ?>
					</select>
				</div>

				<div class="form-group submit">
					<input type="submit" name="submit" value="Enviar" class="option">
				</div>
			</form>
		</div>
	</div>
@stop