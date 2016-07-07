@extends ('layouts.layout')

@section ('content')

	<div class="container">
		<h2>Búsqueda avanzada</h2>
		<hr>
		<div class="dropdown">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-default" data-target="#" href="/recientes">
				Escuela Académica <span class="caret"></span>
			</a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
				<?php foreach ($eap_alumnos as $eap_alumno): ?>
					<li class="dropdown-submenu">
						<a tabindex="-1" href="#"><?= $eap_alumno->nombre_eap; ?></a>
						<ul class="dropdown-menu">
							<?php foreach ($eap_alumno->plan_estudios as $planes): ?>
								<li class="dropdown-submenu">
									<a href=""><?= $planes->anio_plan_estudios; ?></a>
									<ul class="dropdown-menu">
										<?php foreach ($planes->cursoxplan as $cursos): ?>
											<li><a href=""><?= $cursos->curso->nombre_curso; ?></a></li>
										<?php endforeach ?>
									</ul>
								</li>
							<?php endforeach ?>
						</ul>
					</li>
				<?php endforeach ?>
				<li><a href="#">Some action</a></li>
				<li><a href="#">Some other action</a></li>
				<li class="divider"></li>
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Hover me for more options</a>
					<ul class="dropdown-menu">
						<li><a tabindex="-1" href="#">Second level</a></li>
						<li class="dropdown-submenu"><a href="#">Even More..</a>
							<ul class="dropdown-menu">
								<li><a href="#">3rd level</a></li>
								<li><a href="#">3rd level</a></li>
							</ul>
						</li>
						<li><a href="#">Second level</a></li>
						<li><a href="#">Second level</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<!-- <div class="container">
	    <div class="row">
	        <div class="col-sm-3 col-md-3">
	            <div class="panel-group" id="accordion">
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
	                            </span>Content</a>
	                        </h4>
	                    </div>
	                    <div id="collapseOne" class="panel-collapse collapse in">
	                        <div class="panel-body">
	                            <table class="table">
	                                <tr>
	                                    <td>
	                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">Articles</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">News</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Newsletters</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Comments</a>
	                                        <span class="badge">42</span>
	                                    </td>
	                                </tr>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
	                            </span>Modules</a>
	                        </h4>
	                    </div>
	                    <div id="collapseTwo" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <table class="table">
	                                <tr>
	                                    <td>
	                                        <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="http://www.jquery2dotnet.com">Invoices</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="http://www.jquery2dotnet.com">Shipments</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="http://www.jquery2dotnet.com">Tex</a>
	                                    </td>
	                                </tr>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
	                            </span>Account</a>
	                        </h4>
	                    </div>
	                    <div id="collapseThree" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <table class="table">
	                                <tr>
	                                    <td>
	                                        <a href="http://www.jquery2dotnet.com">Change Password</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="http://www.jquery2dotnet.com">Import/Export</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
	                                            Delete Account</a>
	                                    </td>
	                                </tr>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
	                            </span>Reports</a>
	                        </h4>
	                    </div>
	                    <div id="collapseFour" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <table class="table">
	                                <tr>
	                                    <td>
	                                        <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
	                                    </td>
	                                </tr>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-9 col-md-9">
	            <div class="well">
	                <h1>
	                    Accordion Menu With Icon</h1>
	                Admin Dashboard Accordion Menu
	            </div>
	        </div>
	    </div>
	</div> -->

@stop