<?php
//empresa
$correo_empresa=$_POST['correo_empresa'];
$clave_empresa=$_POST['contrasena_empresa'];

//conexion a la bd
$conexion=mysqli_connect('localhost','root','','tevas');
$consultaEmpresa=mysqli_query($conexion, "SELECT * FROM empresas WHERE
 correo_empresa='$correo_empresa' and contrasena_empresa='$clave_empresa'");

if(mysqli_num_rows($consultaEmpresa)>0){

    header("location:../misvacantes.php");
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
