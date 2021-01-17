<?php
//empresa
$correo=$_POST['correo_usuario'];
$clave=$_POST['contrasena_usuario'];

//conexion a la bd
$conexion=mysqli_connect('localhost','root','','tevas');
$consulta=mysqli_query($conexion, "SELECT * FROM usuarios WHERE
 correo_usuario='$correo' and contrasena_usuario='$clave'");

if(mysqli_num_rows($consulta)>0){

    header("location:../postulaciones.php");
    exit;
       }else{
           echo'
           <script>
           alert("Usuario no existente porfavor verifique los datos");
           window.location="../index.php";
           
           </script>
           ';
           exit;
       } 

 