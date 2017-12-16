<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$rfc = $_POST['rfc'];
$imss = $_POST['imss'];
$puesto = $_POST['puesto'];
$cuenta = $_POST['cuenta'];
$salario = $_POST['salario'];

$insertar = "INSERT INTO empleado(nombre,paterno,materno,rfc,imss,puesto,cuenta,salario) VALUES('$nombre','$paterno','$materno','$rfc','$imss','$puesto','$cuenta',$salario)";

$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
  echo "Error al registrar el empleado";
}else{
  echo "Empleado registrado";
}


mysqli_close($conexion);

 ?>
