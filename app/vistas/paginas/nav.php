<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="<?php echo RUTA_URL; ?>">Inicio</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav mr-auto">
				    <li class="nav-item active"><a href="<?php echo RUTA_URL ?>">Inicio</a></li>
				    <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					Empleados <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo RUTA_URL ?>Empleado/lista">Lista de Empleados</a></li>
                                <li><a href="<?php echo RUTA_URL ?>Empleado/agregar">Agregar Empleados</a></li>
                            </ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					Proveedores <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo RUTA_URL ?>Proveedor/lista">Lista de Proveedores</a></li>
                                <li><a href="<?php echo RUTA_URL ?>Proveedor/agregar">Agregar Proveedor</a></li>
                            </ul>
				</li>

				</ul>
			</div><!--/.nav-collapse -->
	</div>