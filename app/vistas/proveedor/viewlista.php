<?php require RUTA_APP . '/vistas/inc/header.php';?>
<nav><?php require RUTA_APP . '/vistas/paginas/nav.php';?></nav>
<div class="container">
  <div class="content">
    <h2>Lista de proveedores</h2>
    <hr />

    <form class="form-inline" method="get"></form>
    <br />
    <div class="table-responsive">
    <table class="table table-striped table-hover">
      <tr>
        <th>No</th>
        <th>Código</th>
        <th>Nombre</th>
        <th>NIT</th>
        <th>Dirección</th>
        <th>DUI</th>
        <th>Teléfono</th>
        <th>Estado</th>
        <th>Saldo</th>
      </tr>

      <!--definimos variable auto aumentable para ver la cantidad de proveedores en la tabla-->
      <?php $No = 1;?>
      <!--foreach para la tabla de proveedores -->
      <?php foreach ($datos['proveedor'] as $proveedor): ?>
      <tr >
        <td><?php echo $No; ?></td>
        <td><?php echo $proveedor->id_prov; ?></td>
        <td><a href="<?php echo RUTA_URL ?>proveedor/datos/<?php echo $proveedor->id_prov ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo $proveedor->nombre_prov; ?></a></td>

        <td><?php echo $proveedor->nit_prov; ?></td>
        <td><?php echo $proveedor->direccion_prov; ?></td>
        <td><?php echo $proveedor->dui_prov; ?></td>
        <td><?php echo $proveedor->telefono_prov; ?></td>
        <!--define que estado economico esta el proveedor con respecto a la empresa-->
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

        <td><?php echo $proveedor->saldo_prov; ?></td>
       <!-- boton para editara con extecion de boostra-->
        <td><a href="<?php echo RUTA_URL; ?>proveedor/editar/<?php echo $proveedor->id_prov ?>" title="Editar Datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

        <a href="<?php echo RUTA_URL; ?>proveedor/eliminar/<?php echo $proveedor->id_prov ?>"
        title="Eliminar" onclick="return confirm(\'Esta seguro de Eliminiar los datos <?php echo $proveedor->nombre_prov ?>?\')"class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> </a></td>
      </tr>
     <?php $No++;?>
     <?php endforeach;?>
    </table>
    </div>
  </div>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>