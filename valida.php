<?php
if(isset($_POST['correo'])&&isset($_POST['passwd'])){
    
include("conexion.php");

$correo = $_POST['correo'];
$passwd = $_POST['passwd'];

$consulta = "SELECT if((correo=? AND passwd=?),true,false) as login FROM cliente";

$statement=$conexion->prepare($consulta);
$statement->bind_param("ss",$correo,$passwd);
$statement->execute();
$statement->bind_result($resultado);
$statement->fetch();


if($resultado)
{
    header("location: productos.html");
}
else
{
    echo "Correo o contraseña incorrectos";
}

$statement->close();
$conexion->close();
}
else{
    echo "location: login_cliente.html";
}

?>
