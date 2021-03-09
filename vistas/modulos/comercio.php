<?php


if($_SESSION["perfil"] != "administrador" ){

echo '<script>

  window.location = "inicio";

</script>';

return;

}

?>
<!-- =============================================== -->

<div class="content-wrapper"style="background-color: #0d1117;border-left:1px solid #fff;border-top:1px solid #fff;">



  <section class="content-header" style="background-color: #0d1117;color: #fff;">
    <h1>
      Gestor comercio
    </h1>
    <ol class="breadcrumb"style="background-color: #0d1117;color: #fff;">
      <li ><a href="inicio"style="color: #fff;"><i  style="color: #fff;" class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active" style="color: #fff;">Gestor comercio</li>
    </ol>
  </section>


  <section class="content">

    <div class="row"style="background-color: #0d1117;">
      <div class="col-md-6">

        <?php
          include"comercio/logotipo.php";
          include "comercio/colores.php";
          include "comercio/redSocial.php";
        ?>

      </div>
      <div class="col-md-6">

      <?php
    
         include "comercio/codigos.php";
   
         include "comercio/informacion.php";
 
         ?>

      </div>

    </div>

  </section>

</div>
<!-- /.content-wrapper -->