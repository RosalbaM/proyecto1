<?php

include("conexion.php");

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$consulta = "SELECT * FROM cliente WHERE correo = '$correo' AND contraseña = '$contraseña'";

$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);

if($filas == 0 ){
  echo "Correo o contraseña incorrectos";
}else{
  if($filas == 1){
    header("location: productos.html");
  }
}

mysqli_free_result($resultado);
mysqli_close($conexion);


?>
