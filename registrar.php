<?php

include  'conexion.php';

$sql= "INSERT INTO cliente VALUES ('','".$_POST["nombre"]."','".$_POST["paterno"]."','".$_POST["materno"]."','".$_POST["direccion"]."','".$_POST["telefono"]."','".$_POST["correo"]."','".$_POST["contraseña"]."')";
$result = mysqli_query($conexion, $sql);

if(!$result){
	echo 'error al registrarse';
}
	else{
		echo 'usuario registrado <br />' ;

   		echo '<a href="LoginC.html">INICIA SESION.</a>';
   	}

//cerrar conexion
mysqli_close($conexion);


?>
