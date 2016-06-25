@extends ('layouts.layout')

@section ('content')
	<div class="container">
		<div class="row">
			<?php $cantidad = count($documentos); ?>
			<?php foreach ( $documentos as $documento ): ?>
			<div class="col-xs-12 col-sm-6">
				<p>
					<div class="col-md-12">
						<div class="document-elements">
							Fecha de subida:
							<?= $documento->fecha_subida; ?>
						</div>
						<div class="document-elements">
							Estado de Documento:
							<?= $documento->estado_doc ?>
						</div>
						<div class="document-elements">
							Dirección del archivo:
							<?= $documento->direccion_archivo ?>
						</div>
						<div class="document-elements">
							Publicado por:
							<?= $documento->usuario->nombre_usuario ?>
						</div>
						<div class="document-elements">
							<button class="btn btn-primary">Like</button>
							<?= $documento->votos_favor ?>
							<button class="btn btn-primary">Dislike</button>
							<?= $documento->votos_contra ?>
						</div>
						<a href="<?= $ruta.$documento->direccion_archivo ?>" target="_blank">
							<button class="btn btn-primary">Ver</button>
						</a>
						<a href="descargar_archivo/<?= $documento->id_documento ?>">
							<button class="btn btn-primary">Descargar</button>
						</a>
					</div>
				</p>
			</div>
			<?php endforeach ?>
		</div>
	</div>

@stop