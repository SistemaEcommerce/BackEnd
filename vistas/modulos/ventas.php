<?php


if($_SESSION["perfil"] != "administrador" && $_SESSION["perfil"] != "editor"&& $_SESSION["perfil"] != "vendedor"){

echo '<script>

  window.location = "inicio";

</script>';

return;

}

?>
<div class="content-wrapper" style="background-color: #0d1117;color: #fff;">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="background-color: #0d1117;color: #fff;">

    <h1>
      Gestor Ventas
    </h1>

    <ol class="breadcrumb" style="background-color: #0d1117;color: #fff;">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Gestor Ventas</li>

    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">

        <?php

        include "inicio/grafico-ventas.php";

        ?>

      </div>
      <div class="box-body">
        <div class="box-tools">

          <a href="vistas/modulos/reportes.php?reporte=compras">

            <button class="btn btn-success">Descargar reporte en Excel</button>

          </a>

        </div>
         <br>
        <table class="table table-bordered table-striped dt-responsive tablaVentas" width="100%">

          <thead>

            <tr>

              <th style="width:10px">#</th>
              <th>Producto</th>
              <th>Imagen Producto</th>
              <th>Cliente</th>
              <th>Foto Cliente</th>
              <th>Venta</th>
              <th>Tipo</th>
              <th>Proceso de envío</th>
              <th>Metodo</th>
              <th>Email</th>
              <th>Dirección</th>
              <th>País</th>
              <th>Fecha</th>

            </tr>

          </thead>

        </table>
      </div>


    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>