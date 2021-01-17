
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
  <link rel="stylesheet" href="css/aspirante/index.css">
  <link rel="stylesheet" href="css/estilosAspirante.css">
  <link rel="stylesheet" href="css/aspirante/subircv.css">



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
                <li class="nav__li"><a href="postulaciones.php">Mis Postulaciones</a></li>
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



  <div class="container-home">

    <main class="home">
      <form action="" method="post" class="p-4 formContainer">

        <!-- ================ división del perfil ===============-->
        <div class="container-perfil form-group mb-12">
          <div class="img-perfil">
            <img src="images/perfil.jpg" id="imgperfil" alt="" onclick="document.getElementById('imagen').click()">
            <label for="imgperfil" class="title" id="titulo-foto"
              onclick="document.getElementById('imagen').click()">Cargar Foto</label>
            <input type="file" class="form-control" name="imagen" id="imagen">
          </div>


        </div>

        <div class="container-titulo-cv datos-form">
          <div class="titulo-cv">
            <h2><input type="text" class="form-group" placeholder="Ingrese aqui su puesto" name="" id=""> </h2>
            <div class="form-group green-border-focus text-area">
              <label for="textarea">Descripción</label>
              <textarea class="form-control" id="textarea" rows="3" maxlength="200"></textarea>
            </div>
            <input type="number" name="" id="salarioDeseado" placeholder="$ Salario minimo"><input type="number" name=""
              id="salarioDeseado" placeholder="$ Salario Maximo">
          </div>
        </div>

        
        
        <div class="container-datos-personales datos-form " id="container-datos-personales">
          <div class="cabecera">
            <div class="legend">
              <legend>Datos Generales </legend>
            </div>
            <div class="fas-icon">
              <i class="fas fa-minus fa2minus"></i>
              <i class="fas fa-pen fa2plus"></i>
            </div>
          </div>
          <div class="datos-personales">
            <div class="row form-group mb-5 justify-content-between">
              <div class="col-md-5">
                <label class="text-black" for="userForm">Nombre(s)</label>
                <input type="nombres" id="userForm" class="form-control" placeholder="Ingrese su nombre">
              </div>
              <div class="col-md-5">
                <label for="userForm" class="text-black">Estado Civil</label>
                <select name="" id="" class="form-control">
                  <option value="Masculino">Soltero/a</option>
                  <option value="Femenino">Casado/a</option>
                  <option value="Masculino">Divorciado/a</option>
                  <option value="Femenino">Viudo/a</option>
                  <option value="Masculino">otro</option>
                </select>
              </div>
            </div>

            <div class="row form-group mb-5 justify-content-between">
              <div class="col-md-5 mb-3 mb-md-0">
                <label class="text-black" for="userForm">Edad</label>
                <input type="number" id="userForm" class="form-control">
              </div>
              <div class="col-md-5 mb-3 mb-md-0">
                <label class="text-black" for="userForm">Correo Electrónico</label>
                <input type="email" id="userForm" class="form-control">
              </div>
            </div>

            <div class="row form-group mb-5 justify-content-between">

              <div class="col-md-5">
                <label for="userForm" class="text-black">Sexo</label>
                <select name="" id="" class="form-control">
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                </select>
              </div>
              <div class="col-md-5 mb-3 mb-md-0">
                <label for="userForm" class="text-black">Número Telefónico</label>
                <input type="number" id="userForm" class="form-control">
              </div>
            </div>
            <div class="row form-group mb-4 justify-content-between">

              <div class="col-md-5 mb-3 mb-md-0">
                <label for="userForm" class="text-black">Fecha de Nacimiento</label>
                <input type="date" name="userForm" id="" class="form-control">
              </div>
              <div class="col-md-5 mb-3 mb-md-0">
                <label for="userForm" class="text-black">Estado/Ubicación</label>
                <select name="" id="" class="form-control">
                    <option value="">Estado</option>
                  
                </select>
              </div>
            </div>
            
            <div class="col-md-12">
              <hr>
            </div>
          </div>
        </div>

        <div class="container-datos-escolares datos-form" id="datos-escolares">
          <header class="cabecera">
            <div class="legend">
              <legend>Escolaridad</legend>
            </div>
            <div class="fas-icon">
              <i class="fas fa-minus fa5minus"></i>
              <i class="fas fa-pen fa5plus"></i>
            </div>
          </header>

          <div class="row form-group contEscolaridad" id="contenedorEscolaridad">

            <div class="row col-md-12 form-group" id="container-institucion">

              <div class="col-md-12 mb-3 mb-md-0">
                <label for="userForm" class="text-black">Escolaridad</label>
                <select name="" id="" class="form-control">
                  <option value="Masculino">Primaria</option>
                  <option value="Femenino">Secundaria</option>
                  <option value="Masculino">Bachillerato</option>
                  <option value="Femenino">Educación Profesional Técnica</option>
                  <option value="Masculino">Licenciatura Concluida</option>
                  <option value="Masculino">Licenciatura Trunca</option>
                  <option value="Masculino">Ingeniería Concluida</option>
                  <option value="Masculino">Ingeniería Trunca</option>
                  <option value="Masculino">Maestria</option>
                  <option value="Masculino">Doctorado</option>
                </select>
              </div>
              <div class="col-md-12">
                <label class="text-black" for="userForm">Institución</label>
                <input type="text" id="userForm" class="form-control" value="Institución">
              </div>
              <div class="col-md-3">
                <label for="userForm">MES</label>
                <input class="form-control" type="number" name="userForm" id="" max="12" min="1">
              </div>
              <div class="col-md-3">
                <label for="userForm">AÑO</label>
                <input class="form-control" type="number" name="userForm" id="">
              </div>
              <div class="col-md-3">
                <label for="userForm">MES</label>
                <input class="form-control" type="number" name="userForm" id="" max="12" min="1">
              </div>
              <div class="col-md-3">
                <label for="userForm">AÑO</label>
                <input class="form-control" type="number" name="userForm" id="">
              </div>
              <div class="col-md-12 form-group row justify-content-center">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Cursando Actualmente</label>
                </div>
              </div>
              <div class="row col-md-12 justify-content-center">
                <div class="faMas" id="fa-plus-circle">
                  <i class="fas fa-plus-circle" id="btnAgregarInstitucion" onclick="clonarInstitucion()"></i><b>Agregar
                    otra</b>
                </div>
              </div>

            </div>



          </div>
        </div>

        <!-- Datos laborales-->
        <div class="container-datos-laborales datos-form">

          <header class="cabecera">
            <div class="legend">
              <legend>Laboral </legend>
            </div>
            <div class="fas-icon">
              <i class="fas fa-minus fa1minus"></i>
              <i class="fas fa-pen fa1plus"></i>
            </div>
          </header>


          <div class=" datos-laborales" id="datos-laborales">

            <div class="row form-group mb-4" id="trabajos">
              <div class="col-md-12">
                <label class="text-black" for="userForm"> Empresa</label>
                <input type="text" name="userForm" id="nomEmpresa" class="form-control">
              </div>
              <div class="col-md-12">
                <label for="userForm" class="text-black">Puesto / Cargo</label>
                <input type="text" name="userForm" id="nomEmpresa" class="form-control">
              </div>
              <div class="col-md-4">
                <label for="userForm">Fecha de inicio</label>
                <input type="date" name="userForm" id="nomEmpresa" class="form-control">
              </div>
              <div class="col-md-4">
                <label for="userForm">Fecha de Salida</label>
                <input type="date" name="userForm" id="nomEmpresa" class="form-control">
              </div>

              <div class="col-md-4">
                <label for="">Estado</label>
                <div class="input-group col-mb-3">
                  <div class="input-group-prepend">

                    <div class="input-group-text">
                      <input type="checkbox" aria-label="Checkbox for following text input" required>
                    </div>
                  </div>
                  <input type="text" name="" id="" value="Actualmente" disabled>
                </div>
              </div>

              <div class="md-form col-md-12">
                <br>
                <textarea id="" class="md-textarea form-control" placeholder="Actividades" rows="5"></textarea>

              </div>

              <div class="row col-md-12 justify-content-center">
                <div class="faMas" id="fa-plus-circle">
                  <i class="fas fa-plus-circle" id="btnAgregarInstitucion" onclick="clonarTrabajos()"></i><b>Agregar
                    otra</b>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--Fin Datos Laborales-->




        <div class="container-datos-complementarios datos-form" id="datos-complementarios">
          <header class="cabecera">
            <div class="legend">
              <legend>Datos Complementarios</legend>
            </div>
            <div class="fas-icon">
              <i class="fas fa-minus fa4minus "></i>
              <i class="fas fa-pen fa4plus"></i>
            </div>
          </header>


          <div class=" datos-complementarios">
                <div class="row form-group mb-4" id="contenedor-complementarios">
                  <div class="col-xl-6 col-md-12">
                    <label for="userForm"> Idiomas</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="checkbox" aria-label="Checkbox for following text input" required>
                        </div>
                      </div>
                      <select class="form-control" aria-label="Text input with checkbox" name="" id="">
                        <option value="">Aleman</option>
                        <option value="">Chino</option>
                        <option value="">Español</option>
                        <option value="">Frances</option>
                        <option value="">Ingles</option>
                        <option value="">Español</option>
                        <option value="">Japones</option>
                        <option value="">Portugues</option>
                        <option value="">Ruso</option>
                      </select>
                      <select class="form-control" aria-label="Text input with checkbox" name="" id="">
                        <option value="">No hablado</option>
                        <option value="">Basico</option>
                        <option value="">Intermedio</option>
                        <option value="">Avanzado</option>
                        <option value="">Nativo</option>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="checkbox" aria-label="Checkbox for following text input" required>
                        </div>
                      </div>
                      <select class="form-control" aria-label="Text input with checkbox" name="" id="">
                        <option value="">Aleman</option>
                        <option value="">Chino</option>
                        <option value="">Español</option>
                        <option value="">Frances</option>
                        <option value="">Ingles</option>
                        <option value="">Español</option>
                        <option value="">Japones</option>
                        <option value="">Portugues</option>
                        <option value="">Ruso</option>
                      </select>
                      <select class="form-control" aria-label="Text input with checkbox" name="" id="">
                        <option value="">No hablado</option>
                        <option value="">Basico</option>
                        <option value="">Intermedio</option>
                        <option value="">Avanzado</option>
                        <option value="">Nativo</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-xl-6 col-md-12">
                    <label for="userForm"> Software y sistemas</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="text" placeholder="Escriba su habilidad" required>
                        </div>
                      </div>

                      <select class="form-control" aria-label="Text input with checkbox" name="" id="">

                        <option value="">Basico</option>
                        <option value="">Intermedio</option>
                        <option value="">Avanzado</option>
                        <option value="">Experto</option>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="text" placeholder="Escriba su habilidad" required>
                        </div>
                      </div>

                      <select class="form-control" aria-label="Text input with checkbox" name="" id="">

                        <option value="">Basico</option>
                        <option value="">Intermedio</option>
                        <option value="">Avanzado</option>
                        <option value="">Experto</option>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="text" placeholder="Escriba su habilidad" required>
                        </div>
                      </div>

                      <select class="form-control" aria-label="Text input with checkbox" name="" id="">

                        <option value="">Basico</option>
                        <option value="">Intermedio</option>
                        <option value="">Avanzado</option>
                        <option value="">Experto</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-xl-12 col-md-12" id="certificaciones">
                    <div class="col-md-12">
                      <label for="userForm"> Certificaciones</label>

                      <input type="text" class="form-control" name="" id="" placeholder="Nombre de la certificación"
                        required>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input type="text" name="" value="Fecha" id="" disabled>
                          </div>
                          <br>
                        </div>

                        <input type="number" class="form-control" min="1" max="12" placeholder="Mes" name="" id=""
                          required>
                        <input type="number" class="form-control" min="1" max="12" placeholder="Año" name="" id=""
                          required>

                      </div>
                    </div>

                    <div class="row col-md-12 justify-content-center">
                      <div class="faMas" id="fa-plus-circle">
                        <i class="fas fa-plus-circle" id="btnAgregarInstitucion"
                          onclick="clonarCertificaciones()"></i><b>Agregar
                          otra</b>
                      </div>
                    </div>

                  </div>

                </div>


            </div>
        </div>

        <body>
          <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">  
              
              <div class="drag-drop">
                  <input type="file" multiple="multiple" id="photo" />
                  <span class="fa-stack fa-2x">
                      <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                      <i class="fa fa-circle fa-stack-1x top medium"></i>
                      <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
                  </span>
                  <span class="desc">Pulsa aquí para subir tu CV</span>
              </div>
              
          </form>
      </body>


        <br>
        <div class="container-button">
          <input clas="btn-guardar-datos" type="button" value="Guardar Datos">
          <a href="Vistaprevia.html"><input clas="btn-visualizar" type="button" value="Vista previa">

        </div>
        <br>
      </form>
    </main>

 


  </div>

  <!-- SCRIPTS -->
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
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/previsualizar.js"></script>
  <script src="js/elementosform.js"></script>


</body>

</html>