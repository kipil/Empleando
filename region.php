<?php 
include 'conexion.php';
      $sql = "Select Nombre from estados";
      $result = mysqli_query($conn,$sql);
      
      if(mysqli_num_rows($result)>0)
      {
          while($row = mysqli_fetch_assoc($result)){
              echo "<option> " .$row["Nombre"],"</option>";

          }
      }else{
          echo "Cero Results";
      }

      mysqli_close($conn);
?>