@extends ('layouts.layout')

@section ('content')

	<div class="container">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover table-condensed">
				<tr class="success">
					<th>Publicado por</th>
					<th>Dirección del archivo</th>
					<th>Fecha de subida</th>
					<th>Reacción</th>
					<th>Acción</th>
				</tr>
				<?php $num_documentos = count($documentos); ?>
				<?php foreach ( $documentos as $documento ): ?>
				<tr>
					<td><?= $documento->usuario->nombre_usuario; ?></td>
					<td><a href="{{ url ('/documentos', $documento->id_documento) }}"><?= $documento->direccion_archivo; ?></a></td>
					<td><?= $documento->fecha_subida; ?></td>
					<td>
						<a class="btn btn-primary">Like</a>
						<?= $documento->votos_favor ?>
						<a class="btn btn-primary">Dislike</a>
						<?= $documento->votos_contra ?>
					</td>
					<td>
						<a class="btn btn-primary" href="<?= $ruta.$documento->direccion_archivo ?>" target="_blank">Ver</a>
						<?php if ($num_documentos == 1): ?>
							<a class="btn btn-primary" href="../descargar_archivo/<?= $documento->id_documento ?>">Descargar</a>
						<?php else: ?>
							<a class="btn btn-primary" href="descargar_archivo/<?= $documento->id_documento ?>">Descargar</a>
						<?php endif ?>
					</td>
				</tr>
				<?php endforeach ?>
			</table>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-2 col-md-offset-5">
				<a class="btn btn-lg btn-block btn-primary" href="{{ url ('/') }}">Inicio</a>
			</div>
		</div>
	</div>

@stop