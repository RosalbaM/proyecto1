<?php

include("conexion.php");

$id_emp = $_POST['id_emp'];
$puesto = $_POST['puesto'];

$consulta = "SELECT id_emp, puesto FROM empleado WHERE id_emp = $id_emp AND puesto = '$puesto'";

$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas == 0 || $filas > 1){
  echo "Numero de empleado o Puesto Incorrecto";
}else{
  if($filas == 1 && $puesto == "recursos humanos"){
    header("location:principal_rh.html");
  }
  
}

mysqli_free_result($resultado);
mysqli_close($conexion);

 ?>
