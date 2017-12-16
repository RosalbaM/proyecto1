<?php

include 'conexion.php'; 

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$consulta= " SELECT correo, contraseña from cliente where correo =' " .$correo." ' AND contraseña = ' ".$contraseña." ' ";
$resultado = mysqli_query($conexion,$consulta);

$filas= mysqli_num_rows($resultado);
if($filas>0){
	header("location: productos.html");
}
else{
	echo "error en la autenticación";
	}
mysqli_free_result($resultado);
mysqli_close($conexion);



?>