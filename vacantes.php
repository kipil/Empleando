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

    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/empresa/index.css">

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
                <li class="nav__li"><a href="index.html">LOGOTIPO</a></li>
            </div>

            <div class="navbar">
                <?php
                echo $nombre;
                ?>
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
                    <a class="nav__lii dropdown-toggle active" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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



    <div class="contenedor-vacantes container">


        <section class="header-info row">

            <div class="topp col-12">
                <legend>Nueva vacante</legend>
            </div>
            <div class="datos-empresa alert alert-primary col-4">
                <img class="logo" src="images/job_logo_3.jpg" width="136" height="140" alt="Logotipo de la vacante">
            </div>

            <div class="datos-empresa alert alert-primary col-8">
                <div class="confidencial">
                    <h3>Datos de la empresa</h3>
                    <p>José Hernández</p>
                    <p>777-888-666</p>
                    <p>Cuernavaca, Morelos</p>
                </div>
            </div>


        </section>
        <hr>
        <div class="confidencia alert alert-primary">
            <h4>Confidencial</h4>
            <p><input type="radio" name="checkbox1" id="checkbox1"><label for="checkbox1">Si</label>
                <input type="radio" name="checkbox1" id="checkbox2"><label for="checkbox2">No</label></p>
        </div>
        <hr>
        <section class="datos-vacante">
            <div class="datos-geograficos alert alert-primary">
                <div class=" geografi row  ">

                    <!--<div class="col-md-4">
                        <label for="" class="text-black"> País</label>
                        <select name="" id="" class="form-control">
                            <option value="estado">Morelos</option>
                            <option value="estado">CDMX</option>
                        </select>
                    </div>-->
                    <div class="areas col-md-6">
                        <label for="" class="text-black">Estado</label>
                        <select name="" id="" class="form-control">
                            <option value="estado">Morelos</option>
                            <option value="estado">CDMX</option>
                        </select>
                    </div>

                    <div class="areas col-md-6">
                        <label for="" class="text-black"> Municipio</label>
                        <select name="" id="" class="form-control">
                            <option value="estado">Morelos</option>
                            <option value="estado">CDMX</option>
                        </select>
                    </div>



                </div>

            </div>

            <div class="titulo-vacantes alert alert-primary">

                <input class="titulo-vaca col-8" type="text" placeholder="Titutulo de Vacante">

            </div>
            <div class="datos-geograficos alert alert-primary">
                <div class=" geografi row  ">


                    <div class="areas col-md-6">
                        <label class="text-black" for="">Area:</label>
                        <select name="" id="" class="form-control">
                            <option value="">Area 1</option>
                            <option value="">Area 2</option>
                        </select>
                    </div>

                    <div class="areas col-md-6">
                        <label class="text-black" for="">Sub area:</label>
                        <select name="" id="" class="form-control" value="">
                            <option value="">Subarea</option>
                            <option value="">Area 2</option>
                        </select>
                    </div>



                </div>

            </div>








            <div class=" datos-geograficos alert alert-primary">

                <div class="textvacan row ">
                    <textarea class="descripcionVacante col-12" name="" id="" cols="" rows="5"
                        placeholder="Descripcion de la Vacante"></textarea>
                </div>

                <hr>
                <div class="row">
                    <div class="areas col-md-6">
                        <label class="text-black " for="">Jornada:</label>
                        <select name="" id="" class="form-control">
                            <option value="">Jornada</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                        </select>
                    </div>

                    <div class="areas col-md-6">
                        <label class="text-black" for="">Tipo de contrato:</label>
                        <select name="" id="" class="form-control" value="Subarea">
                            <option value="">Contrato</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                        </select>
                    </div>


                </div>
                <hr>


                <div class=" row form-group  text-black">
                    <div class="salario">
                        <h5>Sueldo/Salario</h5>
                        <div>
                            <input type="number" name="" id="salarioDeseado-empresa" placeholder="$Minimo">
                            <input type="number" name="" id="salarioDeseado-empresa" placeholder="$Maximo">
                            <input class="form-group" type="checkbox" name="ocultar" value="block">Ocultar salario
                        </div>

                    </div>


                </div>

            </div>



            <div class="topp">
                <legend>Complementarios</legend>
            </div>
            <div class="tipo-sexo alert alert-primary text-black">
                <p>Sexo:
                    <input type="radio" name="hm" value="h"> Hombre
                    <input type="radio" name="hm" value="m"> Mujer
                    <input type="radio" name="hm" value="i"> Indistinto
                </p>



            </div>
            <div class=" edades alert-primary alert row text-black">
                <div class="form-group col-6">
                    <p> Edad minima:
                        <input type="number">
                    </p>

                </div>
                <div class="form-group col-6">
                    <p> Edad Maxima:
                        <input type="number">
                    </p>

                </div>
                <div class=" exp form-group col-6">
                    <p> Experencia:
                        <select class="form-control" name="form-control" id="">
                            <option value="">Seleccionar</option>
                            <option value="">0-6 meses</option>
                            <option value="">1-3 años</option>
                            <option value="">3-5 años</option>
                            <option value="">5-10 años</option>
                            <option value="">(+)10 años</option>
                        </select>

                    </p>


                </div>
                <div class="exp col-6">
                    <P>Escolaridad:
                        <select name="" id="" class="form-control">
                            <option value="">Seleccionar</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                        </select>


                    </P>

                </div>

                <div class="exp col-6">
                    <p>Idioma:
                        <select name="" id="" class="form-control">
                            <option value="">Seleccionar</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                        </select>
                    </p>

                </div>
                <div class="exp col-6">
                    <p>Nivel:
                        <select name="" id="" class="form-control">
                            <option value="">Seleccionar</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                            <option value="">opcion</option>
                        </select>


                    </p>

                </div>



            </div>

        </section>
        <hr>



    </div>
    <div class="boton-visualizar">
        <button id="btn2" class="btn btn-bootstrap" type="button">Vista previa</button>
        <button id="btn2" class="btn btn-bootstrap" type="button">Publicar</button>
    </div>
    <hr>





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