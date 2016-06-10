@extends ('layouts.layout')

@section ('content')
	
	<div class="title">
		<h1>SUBIR</h1>
	</div>

	<div class="form-subir">
		<form action="agregarBibliografia" method="POST">
			{{ csrf_field() }}
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<div class="form-group">
				<label for="nombre_tipo_doc">Nombre del Tipo de documento</label>
				<input type="text" id="nombre_tipo_doc" class="option">
			</div>
			<div class="form-group">
				<label for="tipo_documento">Tipo de Documento</label>
				<select name="tipo_documento" id="tipo_documento" class="option">
					<option value="01">Tipo01</option>
					<option value="02">Tipo02</option>
					<option value="03">Tipo03</option>
					<option value="04">Tipo04</option>
					<option value="05">Tipo05</option>
				</select>
			</div>
			<div class="form-group">
				<label for="titulo_publicacion">Titulo Bibliografía</label>
				<input type="text" id="titulo_publicacion" class="option" required>
			</div>
			<div class="form-group">
				<label for="fecha_publicacion">Fecha Publicación</label>
				<input type="date" id="fecha_publicacion" class="option" required>
			</div>
			<div class="form-group">
				Archivo
				<input type="file" id="archivo" class="option" required>
			</div>
			<div class="form-group submit">
				<input type="submit" id="submit" name="submit" value="Enviar" class="option">
			</div>
		</form>
	</div>
	

@stop