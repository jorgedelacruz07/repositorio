@extends ('layouts.layout')

@section ('content')
	<div class="content-upload">
		<div class="title">
			<h1>SUBIR</h1>
		</div>
		<div class="form-upload">
	        <form action="{{ url('subir') }}" method="post" autocomplete="off" accept-charset="UTF-8" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<div>
					<div class="form-group">
						<div class="form-left">
							<label for="estado_doc">Estado del documento</label>
						</div>
						<div class="form-right">
							<input type="radio" id="estado_doc" name="estado_doc" class="option">
							<label for="estado_doc">1</label>
							<input type="radio" id="estado_doc" name="estado_doc" class="option">
							<label for="estado_doc">2</label>
							<input type="radio" id="estado_doc" name="estado_doc" class="option">
							<label for="estado_doc">3</label>
							<input type="radio" id="estado_doc" name="estado_doc" class="option">
							<label for="estado_doc">4</label>
							<input type="radio" id="estado_doc" name="estado_doc" class="option">
							<label for="estado_doc">5</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-left">
							<label for="direccion_archivo">Archivo</label>
						</div>
						<div class="form-right">
							<input type="file" id="direccion_archivo" name="direccion_archivo" class="file" required>
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-left">
							<label for="id_tipo_doc">Tipo de Documento</label>
						</div>
						<div class="form-right">
							<?php foreach ($tipo_documentos as $tipo_documento): ?>
								<input type="radio" id="tipo_documento" name="tipo_documento" class="option">
								<label for="tipo_documento"><?= $tipo_documento->nombre_tipo_doc; ?></label>
							<?php endforeach ?>
						</div>
					</div>

					<div class="form-group">
						<div class="form-left">
							<label for="extension_documentos">Extensión del Documento</label>
						</div>
						<div class="form-right">
							<?php foreach ($extension_documentos as $extension_documento): ?>
								<input type="radio" id="extension_documento" name="extension_documento" class="option">
								<label for="extension_documento"><?= $extension_documento->nombre_extension_doc; ?></label>
							<?php endforeach ?>
						</div>
					</div>

					<div class="form-group submit">
						<input type="submit" name="submit" value="Enviar" class="submit">
					</div>
				</div>
			</form>
		</div>
	</div>
@stop