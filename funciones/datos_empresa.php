<?php
$conn = new mysqli('localhost','root','','tevas');
if ($conn) {
		echo "conexion exitosa. <br />";
		$imagen_perfil= $_POST ['imagen_perfil'];
		$resena= $_POST ['resena'];
		$nombre_empresa= $_POST ['nombre_empresa'];
		$direccion_empresa= $_POST ['direccion_empresa'];
		$estado= $_POST ['estado'];
		$giro= $_POST ['giro'];
		$rfc= $_POST ['rfc'];
		$numerotelefono= $_POST ['numerotelefono'];
		$municipio= $_POST ['municipio'];
		$web= $_POST ['web'];
        $numero_empleados= $_POST ['numero_empleados'];
        $prestaciones= $_POST ['prestaciones'];
        $correo= $_POST ['correo'];
        $titular= $_POST ['titular'];
        $num_empresa= $_POST ['num_empresa'];
        $contrasenia= $_POST ['contrasenia'];
        $puesto_titular= $_POST ['puesto_titular'];
        $telefonomovil= $_POST ['telefonomovil'];
        $facebook= $_POST ['facebook'];
        $youtube= $_POST ['youtube'];
        $instagram= $_POST ['instagram'];
        $twitter= $_POST ['twitter'];

        $consulta="insert into datosEmpresa values ('$Imagen','$resena','$nombre_empresa','$direccion_empresa','$estado','$giro','$rfc','$numerotelefono',
        '$municipio','$numero_empleados','$prestaciones','$correo','$titular','$num_empresa','$contrasenia','$puesto_titular','$telefonomovil','$facebook','$youtube','$instagram','$twitter')";
		
		$resultado=mysqli_query($connect,$consulta);
		
		if ($resultado) {
			echo "Datos  almacenados. <br />";
		}
		else {
			echo "error en la ejecución de la consulta. <br />";
		}
		
		if (mysqli_close($connect)){ 
			echo "desconexion realizada. <br />";
		} 
		else {
			echo "error en la desconexión";
		}
}