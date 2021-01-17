<?php
session_start();
error_reporting(0);
$nombre= $_SESSION['correo_usuario'];

if(!isset($_SESSION['correo_usuario'])){
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
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilosAspirante.css">
    <link rel="stylesheet" href="css/estilosEmpleos.css">


    <link rel="stylesheet" href="css/aspirante/index.css">
    <script src="https://kit.fontawesome.com/e8948024cf.js" crossorigin="anonymous"></script>



    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="scss/fotoperfil.scss">
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
          <li class="nav__li"><a href="index.html">LOGOTIPO</a></li>
        </div>
  
        <div class="navbar">
          <ul clas="nav__ul">
            <li class="nav__li"><a href="busquedaEmpleo.php">Buscar Empleo</a></li>
            <li class="nav__li"><a href="cvUsuario.php">Mi CV</a></li>
            <li class="nav__li"><a href="postulacionesUsuario.html">Mis Postulaciones</a></li>
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

    



   <section class="mis-postulaciones">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha</th>
            <th scope="col">Puesto</th>
            <th scope="col">Empresa</th>
            <th scope="col">Sueldo</th>
            <th scope="col">Zona</th>
            <th scope="col">Status</th>
            <th scope="col">ver vacante</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>21-10-2020</td>
            <td>Programador</td>
            <td>BBVA</td>
            <td>20,000</td>
            <td>Cuernavaca</td>
            <td class="status"></td>
            <td><i class="fas fa-eye"></i></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>21-10-2020</td>
            <td>Programador</td>
            <td>BBVA</td>
            <td>20,000</td>
            <td>Cuernavaca</td>
            <td class="status2"></td>
            <td><i class="fas fa-eye"></i></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>21-10-2020</td>
            <td>Programador</td>
            <td>BBVA</td>
            <td>20,000</td>
            <td>Cuernavaca</td>
            <td class="status"></td>
            <td><i class="fas fa-eye"></i></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>21-10-2020</td>
            <td>Programador</td>
            <td>BBVA</td>
            <td>20,000</td>
            <td>Cuernavaca</td>
            <td class="status2"></td>
            <td><i class="fas fa-eye"></i></td>
          </tr>
        </tbody>
      </table>
   </section>





    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/previsualizar.js"></script>
    <script src="js/elementosform.js"></script>


</body>

</html>