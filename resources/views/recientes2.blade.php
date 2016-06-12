@extends ('layouts.layout')

@section ('content')
	
	<div class="header-t">
		<div class="header-button">
			<ul class="header-list">
				<?php $var = 1; ?>
				<?php foreach ($tipo_documentos as $tipo_documento): ?>
					<?php if ($var == 1){ ?>
					<li class="<?= $tipo_documento->id_tipo_doc; ?>" style="background-color: gray;"><?= $tipo_documento->nombre_tipo_doc; ?></li>
					<?php } else { ?>
						<li class="<?= $tipo_documento->id_tipo_doc; ?>"><?= $tipo_documento->nombre_tipo_doc; ?></li>
					<?php } $var++; ?>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	
	<div class="slider">
		<div class="slide-Evaluacion">
			<h3>Hola1</h3>
		</div>
		<div class="slide-Bibliografia" style="display: none;">
			<h3>Hola2</h3>
		</div>
		<div class="slide-Clases" style="display: none;">
			<h3>Hola3</h3>
		</div>
	</div>

@stop