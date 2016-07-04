@extends ('layouts.layout')

@section ('content')

	<div class="container">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover table-condensed">
				<tr class="success">
					<th>Fecha de subida</th>
					<th>Estado de Documento</th>
					<th>Dirección del archivo</th>
					<th>Publicado por</th>
					<th>Reacción</th>
					<th>Acción</th>
				</tr>
				<?php $cantidad = count($documentos); ?>
				<?php foreach ( $documentos as $documento ): ?>
				<tr>
					<td><?= $documento->fecha_subida; ?></td>
					<td><?= $documento->estado_doc; ?></td>
					<td><?= $documento->direccion_archivo; ?></td>
					<td><?= $documento->usuario->nombre_usuario; ?></td>
					<td>
						<button class="btn btn-primary" onclick="aumentarValor();">Like</button>
						<?= $documento->votos_favor ?>
						<button class="btn btn-primary" onclick="disminuirValor();">Dislike</button>
						<?= $documento->votos_contra ?>
					</td>
					<td>
						<a href="<?= $ruta.$documento->direccion_archivo ?>" target="_blank">
							<button class="btn btn-primary">Ver</button>
						</a>
						<a href="descargar_archivo/<?= $documento->id_documento ?>">
							<button class="btn btn-primary">Descargar</button>
						</a>
					</td>
				</tr>
				<?php endforeach ?>
			</table>
		</div>
	</div>

@stop