<?php
session_start();
$nombre= $_SESSION['correo_usuario'];

if(!isset($_SESSION['correo_usuario'])){
  echo'<script> alert ("inicie sesion")</script>';
  header("location:index.php");
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
                    <li class="nav__li"><a href="busquedaEmpleo.html">Buscar Empleo</a></li>
                    <li class="nav__li"><a href="cvUsuario.html">Mi CV</a></li>
                    <li class="nav__li"><a href="postulacionesUsuario.html">Mis Postulaciones</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <li class="nav__li dropdown">
                <?php 
            echo $nombre;
            ?>
                    <a class="nav__lii dropdown-toggle active" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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



    <!-- Buscador de empleo -->
    <section class="container home-section ">
        <form method="" class="search-jobs-form">

            <div class="row mb-5 align-items-center" id="formulario-busqueda">

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                    <input type="text" class="form-control form-control-lg"
                        placeholder="Título del trabajo, compañía..">
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true"
                        title="Estado">
                        <?php include 'app/region.php'?>
                    </select>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true"
                        title="Municipio">
                        <?php include 'app/municipios.php'?>
                    </select>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true"
                        title="Jornada Laboral">
                        <option>Medio Tiempo</option>
                        <option>Tiempo completo</option>
                    </select>
                </div>

            </div>

            <div class="row justify-content-center">
                <div class="col align-self-end col-12 col-sm-4 col-md-6 col-lg-4 mb-4 mb-lg-12 ">
                    <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span
                            class="icon-search icon mr-2"></span>Buscar Empleo</button>
                </div>
            </div>

        </form>
    </section>

    <div class="resultados-busqueda">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-header">
                Fecha de publicación EJ: 21-09-2020
            </div>
            <div class="card-body">
                <h5 class="card-title">Titulo del empleo</h5>
                <p class="card-text">Texto : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur
                    quaerat, nostrum debitis molestiae dicta consequatur praesentium officiis consequuntur iure deleniti
                    provident temporibus recusandae! Tempore accusamus nisi odio quo! Voluptates, voluptas!</p>
                <p class="card-text">Empresa</p>
                <p class="card-text">Ciudad</p>
                <a href="#" class="btn btn-primary">registrarse o postularse</a>
            </div>
        </div>
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-header">
                Fecha de publicación EJ: 21-09-2020
            </div>
            <div class="card-body">
                <h5 class="card-title">Titulo del empleo</h5>
                <p class="card-text">Texto : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur
                    quaerat, nostrum debitis molestiae dicta consequatur praesentium officiis consequuntur iure deleniti
                    provident temporibus recusandae! Tempore accusamus nisi odio quo! Voluptates, voluptas!</p>
                <p class="card-text">Empresa</p>
                <p class="card-text">Ciudad</p>
                <a href="#" class="btn btn-primary">registrarse o postularse</a>
            </div>
        </div>
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-header">
                Fecha de publicación EJ: 21-09-2020
            </div>
            <div class="card-body">
                <h5 class="card-title">Titulo del empleo</h5>
                <p class="card-text">Texto : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur
                    quaerat, nostrum debitis molestiae dicta consequatur praesentium officiis consequuntur iure deleniti
                    provident temporibus recusandae! Tempore accusamus nisi odio quo! Voluptates, voluptas!</p>
                <p class="card-text">Empresa</p>
                <p class="card-text">Ciudad</p>
                <a href="#" class="btn btn-primary">registrarse o postularse</a>
            </div>
        </div>
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-header">
                Fecha de publicación EJ: 21-09-2020
            </div>
            <div class="card-body">
                <h5 class="card-title">Titulo del empleo</h5>
                <p class="card-text">Texto : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur
                    quaerat, nostrum debitis molestiae dicta consequatur praesentium officiis consequuntur iure deleniti
                    provident temporibus recusandae! Tempore accusamus nisi odio quo! Voluptates, voluptas!</p>
                <p class="card-text">Empresa</p>
                <p class="card-text">Ciudad</p>
                <a href="#" class="btn btn-primary">registrarse o postularse</a>
            </div>
        </div>




    </div>





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