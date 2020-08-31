<?php require RUTA_APP.'/vistas/inc/header.php'; ?>
<nav><?php require RUTA_APP.'/vistas/paginas/nav.php'; ?></nav>
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
        <!--<th>Código</th>-->
        <th>Nombre</th>
        <th>NIT</th>
        <th>Dirección</th>
        <th>DUI</th>
        <th>Teléfono</th>
        <!--<th>Estado</th>-->
        <th>Saldo</th>
      </tr>
      <?php foreach ($data['proveedor'] as $lista):
      <tr>
        <td><?php echo proveedor->id_prov?></td>
        <td><?php echo proveedor->nombre_prov?></td>
        <td><?php echo proveedor->nit_prov?></td>
        <td><?php echo proveedor->direccion_prov?></td>
        <td><?php echo proveedor->dui_prov?></td>
        <td><?php echo proveedor->telefono_prov?></td>
        <td><?php echo proveedor->saldo_prov?></td>
      </tr>


    </table>
    </div>
  </div>
</div>
<?php require RUTA_APP.'/vistas/inc/footer.php'; ?>
