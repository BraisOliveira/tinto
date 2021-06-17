<?php include_once 'includes/templates/header.php'; ?>

<main>
  <section class="contenedor clearfix contacto-grid">
    <h2>&iexcl;Cont&aacute;ctanos!</h2>
    <div class="info">
        <p class="fas fa-building">Avenida dos Mallos 51</p><br/>
        <p class="fas fa-phone">981 231 528</p>
        <ul>
          <li>Lunes a viernes:</li>
          <li class="fas fa-check">Mañana 9:30 - 13:30</li>
          <li class="fas fa-check">Tarde 17:00 - 20:30</li>
       </ul>
    </div>
    <form class="formulario" action="includes/functions/sendMail.php" method="post">
      <label for="">Nombre</label>
      <input type="text" name="nombre-formulario" id="nombre-formulario">

      <label for="">Correo</label>
      <input type="text" name="correo-formulario" id="correo-formulario">

      <label for="">Mensaje</label>
      <textarea name="mensaje-formulario" id="mensaje-formulario" cols="30" rows="10"></textarea>

      <input type="submit" value="Enviar" class="boton">
    </form>
  </section>

</main>

<div clas="mapa-scroll" id="map"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.6.js"><\/script>')</script>
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  <!-- Google Cloud Map API -->
  <script
      src="https://maps.googleapis.com/maps/api/js?key="
      async
    ></script>

<div class="footer-scroll">
<?php include_once 'includes/templates/footer.php'; ?>
</body>
</html>
