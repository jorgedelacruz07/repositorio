@extends ('layouts.layout')

@section ('content')
	<div class="content-subir">
		<div class="title">
			<h1>SUBIR</h1>
		</div>
		<div class="form-subir">
	        <form action="{{ url('subir') }}" method="post" autocomplete="off">
				{{ csrf_field() }}
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<input type="hidden" name="id_documento" value="<?= $cantidad_documentos++; ?>">

				<div class="form-group">
					<label for="fecha_subida">Fecha Publicación</label>
					<input type="date" id="fecha_subida" name="fecha_subida" class="option" required>
				</div>

				<div class="form-group">
					<label for="estado_doc">Estado del documento</label>
					<input type="number" id="estado_doc" name="estado_doc" class="option" required>
				</div>

				<div class="form-group">
					<label for="direccion_archivo">Archivo</label>
					<input type="file" id="direccion_archivo" name="direccion_archivo" class="option" required>
				</div>

				<div class="form-group">
					<label for="votos_favor">Votos a favor</label>
					<input type="number" id="votos_favor" name="votos_favor" class="option" required>
				</div>

				<div class="form-group">
					<label for="votos_contra">Votos en contra</label>
					<input type="number" id="votos_contra" name="votos_favor" class="option" required>
				</div>
				
				<div class="form-group">
					<label for="id_tipo_doc">Tipo de Documento</label>
					<select name="id_tipo_doc" id="id_tipo_doc" class="option">
					<?php foreach ($tipo_documentos as $tipo_documento): ?>
						<option value="<?= $tipo_documento->id_tipo_doc; ?>" > <?= $tipo_documento->nombre_tipo_doc; ?> </option>
					<?php endforeach ?>
					</select>
				</div>

				<div class="form-group">
					<label for="extension_documentos">Extensión del Documento</label>
					<select name="extension_documentos" id="extension_documentos" class="option">
					<?php foreach ($extension_documentos as $extension_documento): ?>
						<option value="<?= $extension_documento->id_extension_doc; ?>" > <?= $extension_documento->nombre_extension_doc; ?> </option>
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