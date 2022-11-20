<!DOCTYPE html>
<html class="no-js" lang="es">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="icon.png" />
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css" />
    <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);
      if($pagina == "invitados" || $pagina == "index"){
        echo '<link rel="stylesheet" href="css/colorbox.css" />';
      }else if($pagina == "conferencia"){
        echo '<link rel="stylesheet" href="css/lightbox.css" />';
      }
    ?>
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&family=Catamaran:wght@300&family=PT+Sans&family=Raleway:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <meta name="theme-color" content="#fafafa" />
  </head>
  <body class="<?php echo $pagina; ?>">
  <header class="site-header">
      <div class="hero">
        <div class="contenido-header">
          <nav class="redes-sociales">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </nav>
          <div class="informacion-evento">
            <p class="fecha"><i class="far fa-calendar-alt"></i> 10-12 Dic</p>
            <p class="ciudad">
              <i class="fas fa-map-pin"></i> Montevideo, Uruguay
            </p>
          </div>
          <h1 class="nombre-sitio">GdlWebCamp</h1>
          <p class="eslogan">La mejor conferencia de <span>diseño Web</span></p>
        </div>
      </div>
    </header><!--FIN HEADER-->
    <div class="barra contenedor-barra">
      <div class="logo">
        <a href="index.php"><img src="img/logo.svg" alt="Logo" /></a>
      </div>
      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navegacion-principal">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Invitados</a>
        <a href="register.php">Reservaciones</a>
      </nav>
    </div><!--barra-->
    