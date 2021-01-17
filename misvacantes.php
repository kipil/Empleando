<?php
session_start();
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
  <link rel="stylesheet" href="css/empresa/navbar.css">
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
          <li class="nav__li"><a href="planesFacturas.html">Planes y facturas</a></li>
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
            <a class="dropdown-item" href="IndexEmpresa.php">Mi Perfil</a>
            <a class="dropdown-item" href="#">Cambiar Contraseña</a>
            <a class="dropdown-item" href="funciones/cerrarsesion.php">Cerrar Sesión</a>
          </div>
        </li>
      </div>
    </nav>
  </header>

  <div class="container-candidatos">
    <div class="barraBusqueda">

    </div>
    <div class="informacionCandidatos">

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col" >Status</th>
            <th scope="col">Vacante</th>
            <th scope="col">Ubicacion</th>
            <th scope="col">Fecha</th>
            <th scope="col">Candidatos</th>
            <th scope="col">Ver Candidatos</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" style="background-color: red;"></th>
           
            <td>Programador</td>
            <td>Cuernavaca</td>
            <td>21-10-2020</td>
            <td class="status"></td>
            <td><i class="fas fa-eye"></i></td>
          </tr>
          <tr>
            <th scope="row" style="background-color: rgb(0, 209, 52);"></th>
            <td>Programador</td>
            <td>Cuernavaca</td>
            <td>21-10-2020</td>
       
            <td class="status2"></td>
            <td><i class="fas fa-eye"></i></td>
          </tr>
          <tr>
            <th scope="row" style="background-color: red;"></th>
            <td>Programador</td>
            <td>Cuernavaca</td>
            <td>21-10-2020</td>
          
            <td class="status"></td>
            <td><i class="fas fa-eye"></i></td>
          </tr>
          <tr>
            <th scope="row" style="background-color: rgb(0, 209, 52);"></th>
            <td>Programador</td>
            <td>Cuernavaca</td>
            <td>21-10-2020</td>
        
            <td class="status2"></td>
            <td><i class="fas fa-eye"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
    
  </div>

  <!--<div class="">
    <table>
      <th>
        <td>Status</td>
        <td>Vacante</td>
        <td>Ubicacion</td>
        <td>Fecha</td>
        <td>Candidatos</td>
        <td>Ver Candidatos</td>
      </th>
    </table>
  </div>-->



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




</html>