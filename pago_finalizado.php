<?php include_once 'includes/templates/header.php'; ?>
<section class="seccion contenedor">
  <h2>Resumen de registro:</h2>
  <?php
      $resultado = (bool) $_GET['exito'];
      $paymentId = $_GET['paymentId'];

      if($resultado == true) {
            echo "El pago se realiz&oacute; correctamente: ";
            echo "su id es {$paymentId} ";
      }

   ?>
</section>
<?php include_once 'includes/templates/footer.php'; ?>
