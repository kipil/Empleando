<?php
$conexion=mysqli_connect('localhost','root','','tevas');

 
 
 
 
//registro usuario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo_usuario'];
$clave_usuario = $_POST['contrasena_usuario'];
//encriptacion de contraseña
$clave_usuario= hash('sha512', $clave_usuario);
 
$query = "INSERT INTO usuarios(nombre, apellido, correo_usuario, contrasena_usuario) 
VALUES ('$nombre','$apellido','$correo','$clave_usuario')";

//verificacion de correo
$verificar_correo=mysqli_query($conexion," SELECT * FROM usuarios WHERE correo_usuario='$correo'");
  if(mysqli_num_rows($verificar_correo) > 0){
      echo'
      <script>
             alert("Este correo ya esta registrado. intenta con uno diferente");
             window.location="../index.php";
      </script>
      ';
      exit();
  }
 $ejecutar = mysqli_query($conexion, $query);
 
 if($ejecutar){
     echo '
     <script>
        alert("Cuentra creada con Exito");
        window.location ="../index.php";
        </script>
     
     ';
 }

mysqli_close($conexion);
 //registro empresas


?>