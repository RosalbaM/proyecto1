<?php

include("conexion.php");

$correo = $_POST['correo'];
$passwd = $_POST['passwd'];

$consulta = "SELECT if((correo=? AND passwd=?),true,false) as login FROM cliente";

$statement=$conexion->prepare($consulta);
$statement->bind_param("ss",$correo,$passwd);
$statement->execute();
$stmt->bind_result($resultado);
$stmt->fetch();


if($resultado)
{
    header("location: productos.html");
}
else
{
    echo "Correo o contraseña incorrectos";
}

mysqli_free_result($resultado);
mysqli_close($conexion);


?>
