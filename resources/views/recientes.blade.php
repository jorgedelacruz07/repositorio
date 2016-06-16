@extends ('layouts.layout')

@section ('content')
	<div class="content-recents">
		<div class="header-content">
			<h3>Documentos</h3>
		</div>
		<?php $cantidad = count($documentos); ?>
		<?php foreach ( $documentos as $documento ): ?>
			<?php if ($cantidad==1){ ?>
				<div class="content document-<?= $documento->id_documento ?> last-element">
					<div class="image-element">
						<img src="rsc/file.png" alt="">
					</div>
					<div class="body-content">
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
							<input type="button" value="+1">
							<?= $documento->votos_favor ?>
						</div>
						<div class="document-elements">
							<input type="button" value="-1">
							<?= $documento->votos_contra ?>
						</div>
						<div class="document-elements">
							Publicado por:
							<?= $documento->usuario->nombre_usuario ?>
						</div>
						<a href="<?= $ruta.$documento->direccion_archivo ?>" target="_blank">
							<button>Ver</button>
						</a>
						<a href="descargar_archivo/<?= $documento->id_documento ?>">
							<button>Descargar</button>
						</a>
					</div>
				</div>
			<?php }else{ ?>
				<div class="content document-<?= $documento->id_documento ?>">
					<div class="image-element">
						<img src="rsc/file.png" alt="">
					</div>
					<div class="body-content">
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
							<input type="button" value="-1">
							<?= $documento->votos_favor ?>
						</div>
						<div class="document-elements">
							<input type="button" value="+1">
							<?= $documento->votos_contra ?>
						</div>
						<div class="document-elements">
							Publicado por:
							<?= $documento->usuario->nombre_usuario ?>
						</div>
						<a href="<?= $ruta.$documento->direccion_archivo ?>" target="_blank">
							<button>Ver</button>
						</a>
						<a href="descargar_archivo/<?= $documento->id_documento ?>">
							<button>Descargar</button>
						</a>
					</div>
				</div>
			<?php } ?>
			<?php $cantidad--; ?>
		<?php endforeach ?>
	</div>
	<div class="footer-content">

	</div>
@stop