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
  <link rel="stylesheet" href="css/animate.min.css">

  <link rel="stylesheet" href="css/empresa/index.css">
  <link rel="stylesheet" href="css/estilosAspirante.css">
  <link rel="stylesheet" href="css/empresa/estilos.css">
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
          <li class="nav__li"><a href="busquedacv.html">Busquedas de CV'S</a></li>
          <li class="nav__li"><a href="vacantes.html">Publicar vacantes</a></li>
          <li class="nav__li"><a href="misvacantes.html">Mis vacantes</a></li>
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
            <a class="dropdown-item" href="cerrarsesion.php">Cerrar Sesión</a>
          </div>
        </li>
      </div>
    </nav>
  </header>



  <div class="container-empresa ">
    <form action="">

    




    <main class="home">

      <!-- ================ división del perfil ===============-->
      <div class="container-perfil-empresa">

        <div class="img-perfil">
          <img src="images/tulogo.png" id="imglogo" alt="" onclick="document.getElementById('imagen').click()">
          <label for="imglogo" class="title" id="titulo-foto" onclick="document.getElementById('imagen').click()">Cargar
            Foto</label>
          <input type="file" class="form-control" name="imagen" id="imagen">

          <textarea id="" class="estiloempr" placeholder="Reseña de la empresa (500 Caracteres Maximo)"></textarea>

        </div>
        
        <div class="row form-group mb-4 justify-content-between">
        <?php 
        
        include 'conexion.php';
       
        $email = $_SESSION['correo_empresa'];
        if ($resultado = $conn->query("Select * from empresas where correo_empresa='$email'")) {
          $row = $resultado->fetch_assoc();
        ?>


          <div class="col-md-5">
            <label class="nombre-empresa" for="">Nombre de la Empresa</label>
            <input type="text" value="
            <?php 
              print($row['NombreEmpresa']);
               $resultado->close();
              }
            ?>
            " class="form-control" >
            <label class="dir-empre" for="">Direccion de la empresa</label>
            <input type="nombre" value="
            <?php 
              print($row['Direccion']);
            ?>" 
             class="form-control" placeholder="Direccion">
            <label for="estado-empre" class="text-black"> Estado</label>
            <select name="" id="" class="form-control" pla>
              <option value="estado">Morelos</option>
              <option value="estado">CDMX</option>
            </select>
            <label for="giro-empresa" class="text-black"> Giro</label>
            <select name="" id="" class="form-control">
              <option value="Masculino">Opcion 1</option>
              <option value="Femenino">Opcion 2</option>
            </select>


          </div>


          <div class="col-md-5 ">
            <label class="rfc" for="">RFC</label>
            <input type="nombre" id="userForm" class="form-control" value="
            <?php 
              print($row['RFC']);
               $resultado->close();
              
            ?>
            ">
            <label for="userForm" class="text-black">Número Telefónico</label>
            <input type="number" id="userForm" class="form-control">
            <label for="estado-empre" class="text-black"> Municipio</label>
            <select name="" id="" class="form-control">
              <option value="estado">Municipio1</option>
              <option value="estado">Municipio2</option>
            </select>

          </div>

          

        </div>
        <header class="comple">
          <div>
            <legend> Complementarios </legend>
          </div>
        </header>

        <div class="row form-group mb-4 justify-content-between">

          <div class="col-md-5">
            <label class="web-empresa fas fa-globe" for="">WEB</label>
            <input type="text" class="form-control" placeholder="URL de pagina web">

            <label class="redes-empresa" for="">Redes sociales</label>
            <input type="text" class="form-control" placeholder="Facebook">
            <input type="text" class="form-control" placeholder="Youtube">
            <input type="text" class="form-control" placeholder="Instagram">
            <input type="text" class="form-control" placeholder="Twitter">

          </div>
          <div class="col-md-5">
            <label for="numero-empleado" class="text-black"> Numero de empleados</label>
            <select name="" id="" class="form-control">
              <option value="estado">1-2</option>
              <option value="estado">3-10</option>
            </select>

          </div>

          <div class="col-md-5">
            <fieldset>

            </fieldset>


          </div>

        </div>
        <hr>
        <div>
          <legend class="text-black">Prestaciones</legend>

        </div>


        <div class="padree row form-group  ">

          <div class="col-md-4">
            <input class="beneficios" type="checkbox" name="cbBeneficios[]" value="seguroVida">
            <label for="">
              <span>
                <span></span>
              </span>
              seguro de vida
            </label>

            <br>

          </div>
          <div class="col-md-4">
            <input class="beneficios" type="checkbox" name="cbBeneficios[]" value="seguroVida">
            <label for="">
              <span>
                <span></span>
              </span>
              Comedor
            </label>
            <br>

          </div>
          <div class="col-md-4">
            <input class="beneficios" type="checkbox" name="cbBeneficios[]" value="seguroVida">
            <label for="">
              <span>
                <span></span>
              </span>
              Gym
            </label>

          </div>
          <div class="col-md-4">
            <input class="beneficios" type="checkbox" name="cbBeneficios[]" value="seguroVida">
            <label for="">
              <span>
                <span></span>
              </span>
              Vacaciones
            </label>

          </div>
          <div class="col-md-4 between">
            <input class="beneficios" type="checkbox" name="cbBeneficios[]" value="seguroVida">
            <label for="">
              <span>
                <span></span>
              </span>
              Prestaciones de ley
            </label>

          </div>
          <div class="col-md-4">
            <input class="beneficios" type="checkbox" name="cbBeneficios[]" value="seguroVida">
            <label for="">

              ejemplo
            </label>

          </div>
          <div class="col-md-4">
            <input class="beneficios" type="checkbox" name="cbBeneficios[]" value="seguroVida">
            <label for="">
              <span>
                <span></span>
              </span>
              ejemplo
            </label>

          </div>


        </div>
        <div class="col-md-5 beneficios-clonar">
          <label class="text-black" for="userForm">Otro Beneficio</label>
          <input id="userForm" class="form-control" type="text">

        </div>

        <!--<div class="row col-md-12 justify-content-center">
                  
                    <div class="faMas" id="fa-plus-circle">
                      <i class="fas fa-plus-circle" id="btnAgregarInstitucion"
                        onclick="clonarCertificaciones()"></i><b>Agregar
                        otra</b>
                    </div>
                  </div>
                  <div class="row col-md-12 justify-content-center">
                    <label  class="" id="fa-plus-circle">

                      <a class="fas fa-plus-circle clonar" id="btnAgregarBeneficioss"
                      onclick="clonarPrestaciones()"> Agregar Otro beneficio </a>
                    </label>
                  </div>-->
        <hr>


        <header class="comple">
          <div>
            <legend> Datos de cuenta y acceso</legend>
          </div>
        </header>

        <div class="row form-group mb-4 justify-content-between">

          <div class="col-md-5">
            <label class="text-black" for="userForm">Correo Electrónico</label>
            <input type="email" id="userForm" class="form-control">
            <label class="nombre-encargado" for="">Titular de la cuenta</label>
            <input type="nombres" id="userForm" class="form-control" placeholder="Nombre del titular">
            <label for="userForm" class="text-black">Telefono de la empresa</label>
            <input type="number" id="userForm" class="form-control">
          </div>


          <div class="col-md-5">

            <label class="text-black" for="userForm">Contraseña</label>
            <input type="password" id="userForm" class="form-control" placeholder="Contraseña">
            <label class="nombre-encargado" for="">Puesto del titular</label>
            <input type="nombres" id="userForm" class="form-control" placeholder="Titular">
            <label for="userForm" class="text-black">Telefono movil</label>
            <input type="number" id="userForm" class="form-control">


          </div>
          
          <div class="button-empresa">
            <br><br>
            
            <input class="boton-empre" type="submit" value="Guardar Datos">

          </div>

        </div>



    </main>
    </form>
  </div>


  <!--<div class="container-empresa datos-form">
          <div class="reseña-empresa">
            
            <textarea id="" class="estiloempr"  placeholder="Reseña de la empresa (500 Caracteres Maximo)"  ></textarea>
            
          </div>
        </div>-->

  </div>
  </div>

</body>
<!-- MAIN CSS -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        // Asignamos el atributo src a la tag de imagen
        $('#imgperfil').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  // El listener va asignado al input
  $("#imagen").change(function () {
    readURL(this);
  });
</script>


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