<!-- Inicio de la pagina -->
  <!-- Sirve para mostrar el menu principal de la pagina home.view.php -->
  <!-- Este PHP toma los estilos de la carpeta CSS/stylesTemplate -->
 <?php
  require_once "./config/APP.php";
  require_once "./controladores/vistasControlador.php";

  
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS y CSS -->
  
  <title>T-Systems</title>
  <?php include "./vistas/inc/link.php"; ?>
</head>
<body>
   
  <!-- -----------------NAV MENU----------------- -->
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: white;">
      <div class="container">
        <!-- Nota importante: Esta parte de a y buttom es para el icono bars o menu desplegable
        y sirve cuando se ejecuta en dispositivos moviles / contrae todas las opciones del menu para
        ponerlo en un desplegable -->
        <a class="navbar-brand" href="#"><img src="<?php echo SERVERURL; ?>vistas/images/T-SYSTEMS-LOGO2013.svg.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <!-- ------------------ -->
        <!-- SecciÃ³n de las opciones del menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="#" id="home">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="usermanual">Manual de Usuario</a>
            </li>
            <li class="nav-item">
              <!-- Opcion para mandar a Login -->
              <a class="nav-link" href='<?php echo SERVERURL?>vistas/login-view.php' id="login">Iniciar Sesión</a>
            </li>
          </ul>
        </div>
        <!-- Esta parte es para los lenguajes pero se tendra que checar primero -->
        <!-- <div class="lang-menu">
          <div class="selected-lang">
            English
          </div>
        </div> -->
      </div>
    </nav>
  </section>
  <!-- -----------------FIN NAV MENU----------------- -->

<!-- PÃ¡gina principal del sistema -->
  <!-- Este PHP toma los estilos de la carpeta CSS/stylesTemplate -->
  <!-- Con require 'Views/navMenu.php'; mandamos a traer la parte del navegador. 
  Nota: Es importante contar con require -->


  <!-- -----------------BANNER SECTION----------------- -->
  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="promo-title">GestiÃ³n de activos
            al alcance de tu mano</p>
          <p class="sub-title">Organa es un increÃ­ble sistema que te ayudarÃ¡ a planificar
            y administrar cambios en tus activos de una manera fÃ¡cil y
            comprensible, resolver problemas de manera eficiente y te
            permitirÃ¡ obtener un control autÃ³nomo de tu inventario.</p>
            <div class="align-self-center text-center">
              <a href='<?php echo SERVERURL?>vistas/login-view.php' class="btn btn-org">Ir a Organa</a>
            </div>
        </div>
        <div class="col-md-6 text-center">
          <img src="<?php echo SERVERURL;?>vistas/images/undraw_Success_factors_re_ce93.svg" class="img img-fluid">
        </div>
      </div>
    </div>
    <img src="<?php echo SERVERURL;?>vistas/images/wave.svg" class="bottom-img">
  </section>
  <!-- -----------------FIN BANNER SECTION----------------- -->
  <!-- -----------------SERVICES SECTION----------------- -->
  <section class="pt-2 pb-5">
    <div class="container">
      <div class="row">
        <div class="section-head col-md-12">
          <h4><span>Â¿GESTIÃ“N DE TI</span> COMPLEJA?</h4>
          <p>Aqui no conocemos eso, y te demostraremos las
            ventajas que tiene Organa para ti.</p>
        </div>
        <div class="col-md-5 offset-md-1">
          <div class="item"><span class="icon feature_box_col_one"><i class="fa fa-tachometer"></i></span>
            <h6>Ciclo de vida de los activos</h6>
            <p>El ciclo de vida del activo incluye:
              estado de un activo, custodio, ubicaciÃ³n,
              garantÃ­a, fecha de depreciaciÃ³n,
              movimientos y mÃ¡s.</p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="item"><span class="icon feature_box_col_two"><i class="fa fa-archive"></i></span>
            <h6>Inventario de activos</h6>
            <p>Se presenta un inventario integrado para
              que pueda administrar fÃ¡cilmente toda la
              informaciÃ³n sobre un activo, basandose en
              datos como la disponibilidad, ubicaciÃ³n,
              entre otros.</p>
          </div>
        </div>
        <div class="col-md-5 offset-md-1">
          <div class="item"><span class="icon feature_box_col_three"><i class="fa 
                fa-hourglass-half"></i></span>
            <h6>Automatizado y en tiempo real</h6>
            <p>Visualice el estado de cada activo de
              TI en su empresa en tiempo real con
              nuestro inventario automatizado. Detecte
              con anticipaciÃ³n el hardware a actualizar
              o a renovar.</p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="item"><span class="icon feature_box_col_four"><i class="fa 
                fa-database"></i></span>
            <h6>Facilita el control de mantenimiento</h6>
            <p>Implementa un buen sistema de control
              para que los activos tengan un mantenimiento
              periÃ³dico, ademÃ¡s de programar sus garantias
              en tiempo y forma.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -----------------FIN SERVICES SECTION----------------- -->
  <!-- -----------------ABOUT----------------- -->
  <section class="about-us pt-2 pb-5">
    <div class="container">
      <div class="row">
        <div class="section-head col-md-12">
          <h4><span>Â¿POR QUÃ‰ ELEGIR</span> ORGANA?</h4>
        </div>
        <div class="col-md-6 about-us">
          <img src="<?php echo SERVERURL;?>vistas/images/undraw_Operating_system_re_iqsc.svg" class="img-fluid">
        </div>
        <div class="col-md-6 about-us">
          <p class="about-title">Ventajas</p>
          <ul>
            <li>DocumentaciÃ³n de todos los activos dentro de la organizaciÃ³n.</li>
            <li>Ayudar a identificar dÃ³nde estÃ¡n estos activos en cualquier momento.</li>
            <li>CÃ¡lculo de la depreciaciÃ³n de los activos.</li>
            <li>Administrar y reportar datos de activos para respaldar los procesos financieros.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- -----------------FIN ABOUT----------------- -->

<!-- Con require 'Views/footer.php'; mandamos a traer la parte de pie de pÃ¡gina. 
  Nota: Es importante contar con require -->


    <!-- Pie de pÃ¡gina/Final de la pÃ¡gina -->
  <!-- Este PHP toma los estilos de la carpeta CSS/stylesTemplate -->
  <!-- -----------------FOOTER----------------- -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Hace un espacio en un parrafo -->
          <blockquote class="space"></blockquote>
        </div>
      </div>
    </div>
    <footer id="footer-second">
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-box">
            <img src="<?php echo SERVERURL;?>vistas/images/logo-t-systems-white.svg-data.svg" class="img-footer">
          </div>
          <div class="offset-md-4 col-md-3 footer-box">
            <img src="<?php echo SERVERURL;?>vistas/images/logo-t-systems-claim-white.svg-data.svg" class="img-footer">
          </div>
          <div class="col-md-11 footer-box">
            <hr class="line-footer">
          </div>
          <div class="col-md-3 footer-box">
            <ul class="footer-link">
              <li><a href="#">Revista para clientes</a></li>
              <li><a href="#">Aviso legal</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-box">
            <ul class="footer-link">
              <li><a href="#">Contacto con T-Systems</a></li>
              <li><a href="#">Aviso legal</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-box">
            <ul class="footer-link">
              <li><a href="#">PolÃ­tica de privacidad</a></li>
              <li><a href="#">Aviso de privacidad</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-box social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin-square"></i></a>
          </div>
          <div class="col-md-12">
            <p class="copyright">Â© 2021 T-Systems International GmbH. Todos los derechos reservados.</p>
          </div>
        </div>
      </div>
    </footer>
  </footer>
  <!-- -----------------FIN FOOTER----------------- -->
  <?php include "./vistas/inc/Script.php"; ?>
</body>
</html>