<?php require RUTA_APP . '/vistas/inc/header.php';?>
<nav><?php require RUTA_APP . '/vistas/paginas/nav.php';?></nav>
<div class="container">
		<div class="content">
			<h2>Datos del Proveedor &raquo; Perfil</h2>
			<hr/>
			<?php $proveedor = $datos;?>
			<table class="table table-striped table-condensed">
				<tr>
					<th width="20%">Codigo</th>
					<td><?php echo $proveedor->id_prov; ?></td>
				</tr>
				<tr>
					<th>Nombre del proveedor</th>
					<td><?php echo $proveedor->nombre_prov; ?></td>
				</tr>
				<tr>
					<th>NIT Prov</th>
					<td><?php echo $proveedor->nit_prov; ?></td>
				</tr>
				<tr>
					<th>Dirección</th>
					<td><?php echo $proveedor->direccion_prov; ?></td>
				</tr>
				<tr>
					<th>DUI</th>
					<td><?php echo $proveedor->dui_prov; ?></td>
				</tr>
				<tr>
					<th>Teléfono</th>
					<td><?php echo $proveedor->telefono_prov; ?></td>
				</tr>
				<tr>
					<th>Saldo</th>
					<td><?php echo $proveedor->saldo_prov; ?></td>
				</tr>
				<tr>
					<th>Estado</th>
					 <td>
<?php switch ($proveedor) {
    case ($proveedor->saldo_prov > 0):
        echo '<span class="label label-success">Deudor</span>';
        break;
    case ($proveedor->saldo_prov < 0):
        echo '<span class="label  label-info">Acreedor</span>';
        break;
    default:
        echo '<span class="label label-warning">Balance</span>';
        break;
}?>
</td>

				</tr>

			</table>

				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<a href="listaproveedor.php" class="btn btn-sm btn-primary">Regresar</a>
					</div>
				</div>

		</div>
	</div>

<?php require RUTA_APP . '/vistas/inc/footer.php';?>