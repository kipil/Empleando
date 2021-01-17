<?php
session_start();
error_reporting(0);
$nombre= $_SESSION['correo_empresa'];

if(!isset($_SESSION['correo_empresa'])){
  echo'<script> alert ("inicie sesion")
  window.location="index.php";
  </script>';

  
  session_destroy();
  die();
}

?>
<!doctype html>
<html lang="en">

<head>
  <title>X Trabajos &mdash; - Encuentra el trabajo de tus sueños</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Free-Template.co" />

  <link rel="shortcut icon" href="ftco-32x32.png">
  <link rel="stylesheet" href="css/custom-bs.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/line-icons/style.css">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/empresa/index.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/style.css">


  <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/ef20df551b.js" crossorigin="anonymous"></script>
</head>

<body id="top">
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <header class="header">
    <nav class="menu_empresa ">
      <div class="logoEmpresa">
        <li class="nav__li"><a href="index.php">LOGOTIPO</a></li>
      </div>

      <div class="navbar">
        <ul clas="nav__ul">
          <li class="nav__li"><a href="#">Planes y facturas</a></li>
          <li class="nav__li"><a href="busquedacv.php">Busquedas de CV'S</a></li>
          <li class="nav__li"><a href="vacantes.php">Publicar vacantes</a></li>
          <li class="nav__li"><a href="misvacantes.php">Mis vacantes</a></li>
        </ul>
      </div>

      <div class="dropdown">
        <li class="nav__li dropdown">
        <?php 
            echo $nombre;
            ?>
          <a class="nav__lii dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Mi Cuenta
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            
            <a class="dropdown-item" href="#">Cambiar Contraseña</a>
            <a class="dropdown-item" href="funciones/cerrarsesion.php">Cerrar Sesión</a>
          </div>
        </li>
      </div>
    </nav>
  </header>




  <main class="container-registro-empresa  row">
    <hr>

    <!-- ================ división del perfil ===============-->
    <div class="col-12">


      <div class="general-empresa ">
        <div class="">
          <legend>Busquedas de Cv's</legend>
        </div>
      </div>

      <div class="row form-group  justify-content-center text-black">

        <label for="coll">
          <select class="coll selectpicker " data-live-search="true" name="Zona" id="" title="Zona"></select>
        </label>

        <select class="col-md-2 selectpicker" data-live-search="true" name="Area" id="" title="Area"></select>
        <select class="col-md-2 selectpicker" data-live-search="true" name="Puesto" id="" title="Puesto"></select>
        <button type="submit" class="btnVerCVS" title="Ver">Ver</button>
   
      </div>
      <hr>


      <section class="informacionCVS">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
          <div class="card-header">
            Grupo SALINAS
          </div>
          <div class="InfoEmpresa">
            <img src="images/job_logo_1.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title">Analista de selección</h5>
              <p class="card-text">Licenciado en Administración.</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>
        </div>

        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
          <div class="card-header">
            Grupo SALINAS
          </div>
          <div class="InfoEmpresa">
            <img src="images/job_logo_5.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title">Analista de selección</h5>
              <p class="card-text">Licenciado en Administración.</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>
        </div>

        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
          <div class="card-header">
            Grupo SALINAS
          </div>
          <div class="InfoEmpresa">
            <img src="images/job_logo_2.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title">Analista de selección</h5>
              <p class="card-text">Licenciado en Administración.</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>
        </div>

        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
          <div class="card-header">
            Grupo SALINAS
          </div>
          <div class="InfoEmpresa">
            <img src="images/job_logo_4.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title">Analista de selección</h5>
              <p class="card-text">Licenciado en Administración.</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>
        </div>
      </section>



    </div>

  </main>




</body>
<!-- MAIN CSS -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/stickyfill.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>

<script src="js/bootstrap-select.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/previsualizar.js"></script>
<script src="js/elementosform.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>




</html>