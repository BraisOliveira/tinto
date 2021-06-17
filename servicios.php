<?php
  include 'includes/templates/header.php';
 ?>

<main class="seccion contenedor">

    <h2 calss="servicios-scroll">Nuestros servicios</h2>
    <?php
      try {
        require_once('includes/functions/connection.php');
        $query =  "SELECT nombreServicio, descripcionServicio, precioServicio, img FROM servicio WHERE (id_servicio > 3)";
        $result = mysqli_query($conn, $query);
      } catch(\Exception $e) {
        echo $e->getMessage();
      }
     ?>

     <div class="servicios">
      <?php
        $galeria = array();
        while ($servicios = $result->fetch_assoc()) {
            $tipo = $servicios['nombreServicio'];

            $servicio = array(
              'nombre' => $servicios['nombreServicio'],
              'descripcion' => $servicios['descripcionServicio'],
              'img' => $servicios['img']
              //'precio' => $servicios['precioServicio']
            );
            $galeria[$tipo][] = $servicio;
          }
        ?>
        <?php
          foreach ($galeria as $key => $listaServicios) {?>
            <h3>
              <i class="fa fa-star"></i>
              <?php echo $key;?>
            </h3>
          <?php foreach($listaServicios as $servicio){ ?>
            <div class="descripcion">
              <p class="pServicios"><?php echo $servicio['descripcion'];?></p>
              <img class="imagen" src="<?php echo $servicio['img']; ?>" alt="imagen del servicio">
            </div>

            <?php } ?>
          <?php } ?>
     </div>
     <?php
      $conn->close();
      ?>

</main>

<div class="footer-scroll">
  <?php
    include 'includes/templates/footer.php';
  ?>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.6.js"><\/script>')</script>
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/main.js"></script>
