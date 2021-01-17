<?php
$conexion=mysqli_connect('localhost','root','','tevas');

 
 
 
 
//registro empresa
$correo_empresa = $_POST['correo_empresa'];
$clave_empresa = $_POST['contrasena_empresa'];
$nombre_empresa = $_POST['NombreEmpresa'];
$rfc = $_POST['RFC'];
$giro= $_POST['GiroEmpresa'];
$estado = $_POST['Estado'];
$municipio = $_POST['Municipio'];
$direccion = $_POST['Direccion'];
$telefono= $_POST['telefonoEmpresa'];
//encriptacion de contraseña
//$clave_empresa= hash('sha512', $clave_empresa);
 
$query = "INSERT INTO empresas(correo_empresa, contrasena_empresa, NombreEmpresa, RFC, GiroEmpresa, Estado, Municipio, Direccion, telefonoEmpresa) 
VALUES ('$correo_empresa','$clave_empresa','$nombre_empresa','$rfc','$giro','$estado','$municipio','$direccion','$telefono')";

//verificacion de correo
$verificar_correo=mysqli_query($conexion," SELECT * FROM empresas WHERE correo_empresa='$correo_empresa'");
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