<?php require RUTA_APP.'/vistas/inc/header.php'; ?>
<nav><?php require RUTA_APP.'/vistas/paginas/nav.php'; ?></nav>
<div class="container">
		<div class="content">
			<h2>Datos del proveedor &raquo; Agregar datos</h2>
			<hr />
<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Codigo del proveedor</label>
					<div class="col-sm-2">
						<input type="text" name="id_prov" class="form-control" placeholder="ID del proveedor" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" name="nombre_prov" class="form-control" placeholder="Nombres" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NIT</label>
					<div class="col-sm-4">
						<input type="number" name="nit_prov" class="form-control" placeholder="Numero de NIT" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Dirección</label>
					<div class="col-sm-4">
						<textarea name="direccion_prov" class="form-control" placeholder="Dirección"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">DUI</label>
					<div class="col-sm-4">
						<input type="tel" name="dui_prov" maxlength="9" class="form-control" placeholder="Numero de DUI" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Teléfono</label>
					<div class="col-sm-3">
						<input type="tel" name="telefono_prov" maxlength="8" class="form-control" placeholder="Teléfono" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Saldo</label>
					<div class="col-sm-3">
						<input type="number" name="saldo_prov"  class="form-control" placeholder="Saldo" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="listproveedor.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php require RUTA_APP.'/vistas/inc/footer.php'; ?>  