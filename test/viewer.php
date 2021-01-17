<?php 
    include 'app/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>


<form action="app/imagen.php" method="post" enctype='multipart/form-data'>
<input type="file" name="name">
    <input type="submit" value="Enviar">
</form>

   
</body>
</html>