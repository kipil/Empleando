<?php
session_start();

$conexion=mysqli_connect('localhost','root','','tevas');

//usuarios
$correo=$_POST['correo_usuario'];
$clave=$_POST['contrasena_usuario'];





$consulta=mysqli_query($conexion, "SELECT * FROM usuarios 
    WHERE correo_usuario='$correo' and contrasena_usuario='$clave'");

if(mysqli_num_rows($consulta)>0){
    $_SESSION['correo_usuario']=$correo;

    header("location:../postulaciones.php");
    exit;
}else{
    echo'<script> 
        alert("Usuario no existe, por favor verifique los datos");
        window.location ="../index.php";
    </script>
    ';
    exit;
}
?>