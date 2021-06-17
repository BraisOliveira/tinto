<?php include_once 'includes/templates/header.php'; ?>
  <section class="promos">
    <div class="contenedor-video">
      <video autoplay loop poster="">
        <source src="video/tendal.mp4" type="video/mp4">
      </video>
    </div> <!-- .contenedor-video -->
    <div class="promociones">
      <div class="contenedor">
        <div class="promociones-contenedor">
          <h2 class="promos-scroll">Info Promociones</h2>
          <nav class="nav-promo">
            <a id="nav-promo_caballero"  href="#caballero"><i class="fab fa-black-tie"></i></i>Traje caballero</a>
            <a id="nav-promo_cama"  href="#cama"><i class="fas fa-bed"></i></i>Ropa de cama</a>
            <a id="nav-promo_novia"  href="#novia"><i class="fas fa-dove"></i>Traje novia o comuni&oacute;n</a>
          </nav>
          <nav id="caballero" class="info ocultar clearfix">
            <div class="detalle">
              <h3>¡Promoci&oacute;n navide&ntilde;a!</h3>
              <p><i class="fas fa-euro-sign"></i>20% de descuento</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i>15 de noviembre - 15 de enero</p>
              <p><i class="fa fa-user" aria-hidden="true"></i>Solo para socios</p>
            </div>
            <a href="login.php" class="boton fr">Hacereme socio</a>
          </nav>
          <nav id="cama" class="info ocultar clearfix">
            <div class="detalle">
              <h3>Durante todo el a&ntilde;o</h3>
              <p><i class="fas fa-euro-sign"></i>10% de descuento</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i>365 d&iacute;as de oferta</p>
              <p><i class="fa fa-user" aria-hidden="true"></i>Solo para socios</p>
            </div>
            <a href="login.php" class="boton fr">Hacerme socio</a>
          </nav>
          <nav id="novia" class="info ocultar clearfix">
            <div class="detalle">
              <h3>¡Promoci&oacute;n navide&ntilde;a!</h3>
              <p><i class="fas fa-euro-sign"></i>5% de descuento</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i>15 de noviembre - 15 de enero</p>
              <p><i class="fa fa-user" aria-hidden="true"></i>Solo para socios</p>
            </div>
            <a href="login.php" class="boton fr">Hacerme socio</a>
          </nav>
        </div>
      </div>
    </div>
  </section> <!-- .promos -->
  <section class="precios seccion">
    <h2 class="precios-scroll">Tarifa plana</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Basic</h3>
            <p class="numero">44.00€</p>
            <ul>
              <li><i class="fas fa-check"></i>Una recogida semanal</li>
              <li><i class="fas fa-check"></i>Una de nuestras bolsas llena</li>
              <li><i class="fas fa-check"></i>En 24 horas tendrás tu ropa limpia, seca y doblada</li>
            </ul>
            <a href="login.php" class="boton hollow">Subscribirme</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
                    <h3>Plus</h3>
                    <p class=" numero">77.00€</p>
            <ul>
              <li><i class="fas fa-check"></i>Una recogida semanal</li>
              <li><i class="fas fa-check"></i>Dos de nuestras bolsas llenas</li>
              <li><i class="fas fa-check"></i>Selecciona 5 prendas que quieres que te planchemos</li>
              <li><i class="fas fa-check"></i>En 48 horas tendr&aacute;s tu ropa limpia, seca, doblada y planchada</li>
            </ul>
            <a href="login.php" class="boton">Subscribirme</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Premium</h3>
            <p class="numero">99.00€</p>
            <ul>
              <li><i class="fas fa-check"></i>Una recogida semanal</li>
              <li><i class="fas fa-check"></i>Dos de nuestras bolsas llenas</li>
              <li><i class="fas fa-check"></i>Selecciona 12 prendas que quieres que te planchemos</li>
              <li><i class="fas fa-check"></i>En 48 horas tendr&aacute;s tu ropa limpia, seca, doblada y planchada</li>
            </ul>
            <a href="login.php" class="boton">Subscribirme</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

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

<div class="footer-scroll">
  <?php
    include 'includes/templates/footer.php';
  ?>
</div>
</body>
</html>
