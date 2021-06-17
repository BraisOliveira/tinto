
<?php
  include 'includes/templates/header.php';
?>
  <section class="seccion contenedor">
    <h2 class="nosotros-scroll">Algo sobre nosotros</h2>
    <!-- separador h2 p -->
    <svg xmlns="http://www.w3.org/2000/svg" class="separador" width="100" height="35" viewBox="0 0 24 24"
      stroke-width="3" stroke="#8D3A48" fill="none" stroke-linecap="round" stroke-linejoin="round">
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <line x1="3" y1="12" x2="3" y2="12.01" />
      <line x1="7" y1="12" x2="17" y2="12" />
      <line x1="21" y1="12" x2="21" y2="12.01" />
    </svg>
      <h4>
        En Tintorería Avenida podemos ofrecerle atención personalizada en todos los servicios de cuidado y mantenimiento téxtil:<br>
        Limpieza en seco.<br>
        Técnicas de desmanchado profesional con análisis individualizado.<br>
        Planchado en prensa, en maniquí y manual seleccionando en cada caso el mejor recurso.<br>
        Servicio de lavandería.<br>
        Especialidad en tratamiento de pieles.<br>
      </h4>
      <p>
        Llevamos desde mediados del siglo XX cuidando algo más que las prendas de todas y cada una de las personas que
        entran por nuestra puerta.
        Rehabilitamos trajes de novia, limpiamos la ropa de cama y los sofás de la casa donde vive una familia.
      </p>
  </section>
  <section class="seccion contenedor">
    <h2 class="galeria-scroll">Galer&iacute;a de Staff e instalaciones</h2>
    <div class="galeria">
      <a href="img/mujer-sonriendo.jpg" data-lightbox="galeria">
        <img src="img/thumbs/mujer-sonriendo-200px.jpg" alt="miniatura de empleada sonriendo">
      </a>
      <a href="img/fulano-traje.jpg" data-lightbox="galeria">
        <img src="img/thumbs/fulano-traje-200px.jpg" alt="miniatura de empleado sonriendo">
      </a>
      <a href="img/vigga-economacircular-serviguide.png" data-lightbox="galeria">
        <img src="img/thumbs/lavadora-200px.png" alt="miniatura hobre y mujer con chaleco señalando lavadora">
      </a>
      <a href="img/tintoreal.jpg" data-lightbox="galeria">
        <img src="img/thumbs/tintoreal-200px.jpg" alt="miniatura de imagen mujer sonrriendo">
      </a>
      <a href="img/chupa.jpg" data-lightbox="galeria">
        <img src="img/thumbs/chupa-200px.jpg" alt="miniatura de imagen mujer sonrriendo">
      </a>

    </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.6.js"><\/script>')</script>
    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/main.js"></script>
    <div class="footer-scroll">
      <?php
         include 'includes/templates/footer.php';
      ?>
    </div>
</body>
</html>
