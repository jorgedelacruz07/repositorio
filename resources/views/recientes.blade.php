@extends ('layouts.layout')

@section ('content')
	<div class="header-content">
		<h3>Documentos</h3>
	</div>
	
	<?php foreach ($documentos as $documento): ?>
		<div class="body-content document-<?= $documento->id_documento ?>">
			<div class="document-elements">
				Fecha de subida
				<?= $documento->fecha_subida; ?>
			</div>
			<div class="document-elements">
				Estado de Documento
				<?= $documento->estado_doc ?>	
			</div>
			<div class="document-elements">
				Dirección del archivo
				<?= $documento->direccion_archivo ?>	
			</div>
			<div class="document-elements">
				Votos a favor
				<?= $documento->votos_favor ?>	
			</div>
			<div class="document-elements">
				Votos en contra
				<?= $documento->votos_contra ?>	
			</div>
			<div class="document-elements">
				Publicado por
				<?= $documento->id_usuario ?>
			</div>
		</div>
		<div class="footer-content">
			
		</div>
	<?php endforeach ?>
	
@stop