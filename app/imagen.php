<?php 

    $conn = new PDO('mysql:host=localhost;dbname=datosmexico;charset=UTF8','root','');
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $datos = base64_encode(file_get_contents($_FILES['perfilIMG']['tmp_name']));

    try{
       $consulta = "INSERT INTO img (";
       $consulta .= "imagen";
       $consulta .= ") VALUES (";
       $consulta .= "'".$datos."');";
       $conn->query($consulta);
    }catch (Exception $e){
        die ("Se produjo un error");
    }
    echo("<h1 class='btn' >Imagen almacenada</h1>");
    echo("<a href='../index.php'><h4>Regresar...</h4> </a>");

   

?>