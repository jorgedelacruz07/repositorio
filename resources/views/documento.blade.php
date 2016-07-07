@extends ('layouts.layout')

@section ('content')

	<div class="container">
		<div class="col-md-3">
			<img src="../rsc/file.png" alt="" class="img-responsive img-circle">
		</div>
		<div class="col-md-9">
			<div class="form">
				<div class="form-group">
					<label for="" class="control-label col-md-4 text-primary">Publicado por</label>
					<div class="col-md-8">
						<p><?= $documento->usuario->nombre_usuario; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-4 text-primary">Dirección del archivo</label>
					<div class="col-md-8">
						<p><?= $documento->direccion_archivo; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-md-4 text-primary">Fecha de subida</label>
					<div class="col-md-8">
						<p><?= $documento->fecha_subida; ?></p>
					</div>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="form-group">
					<div class="col-md-12">
						<a class="btn btn-primary">Like</a>
							<?= $documento->votos_favor ?>
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<div class="col-md-12">
						<a class="btn btn-primary">Dislike</a>
							<?= $documento->votos_contra ?>
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<div class="col-md-12">
						<p>
							<a class="btn btn-primary" href="<?= $ruta.$documento->direccion_archivo ?>" target="_blank">Ver</a>
							<a class="btn btn-primary" href="../descargar_archivo/<?= $documento->id_documento ?>">Descargar</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop