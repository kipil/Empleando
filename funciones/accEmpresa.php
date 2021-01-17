<?php
session_start();

$conexion=mysqli_connect('localhost','root','','tevas');

//usuarios
$correo=$_POST['correo_empresa'];
$clave_empresa=$_POST['contrasena_empresa'];





$consulta_empresa=mysqli_query($conexion, "SELECT * FROM empresas 
    WHERE correo_empresa='$correo' and contrasena_empresa='$clave_empresa'");

if(mysqli_num_rows($consulta_empresa)>0){
    $_SESSION['correo_empresa']=$correo;

    header("location:../misvacantes.php");
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