<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <title>Tintorer&iacute;a Avenida</title>

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link rel="shortcut icon" href="img/favicon.ico"/>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/lightbox.css">

  <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
  ?>

</head>

<body class="<?php echo $pagina; ?>">
  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/tintoreriavenida/?hl=es" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
        </nav>
        <div class="informacion">
          <p class="ciudad"><i class="fas fa-map-marker-alt"></i>A Coru&ntilde;a</p>
          <h1 class="nombre-sitio">Tintorer&iacute;a Avenida</h1>
          <p class="slogan">M&aacute;s de 50 a&ntilde;os de <span>oficio</span></p>
        </div>
      </div>
    </div>
    <!--.hero-->
  </header>

  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
        <a href="index.php"><img src="img/cropped-logo11.jpg" alt="logo tintoreria"></a>
      </div>
      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navegacion-principal clearfix">
        <a href="nosotros.php">Nosotros</a>
        <a href="servicios.php">Servicios</a>
        <a href="contacto.php">Contacto</a>
        <a href="login.php">Contratar</a>
      </nav>
    </div>
  </div>
