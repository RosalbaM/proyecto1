<?php

session_start();
include 'conexion.php';
if(isset($_POST['correo']) and isset($_POST['contraseña'])) 
{
	
	$correodeusuario=mysqli_real_escape_string($conexion,$_POST['correo']);
	$password=mysqli_real_escape_string($conexion,$_POST['contraseña']);
	$comprobacion_de_correo=' SELECT correo FROM cliente WHERE correo="'.$correodeusuario.'"';
	$comprobacion=mysqli_query($conexion,$comprobacion_de_correo);
		if($comprobacion->num_rows>0)
			{
				$consulta='SELECT  contraseña FROM  cliente WHERE  correo ="'.$password.'"';
				$resultado=mysqli_query($conexion,$consulta);
				$row= $resultado->fetch_assoc();
				//$recoger_dato= mysqli_fetch_assoc($resultado);
				$comprobar_password=password_verify($password,$row['contraseña']);
 					if($comprobar_password)
 						{
		 					 header( "location: productos.html");
 				 		}else
 				 			{
 								print 'los datos han sido incorrectos <br>
 								<a href="./" >Volver</a>';
							}
 			}else{
 				print 'no se encuentra en el registro<br>
 								<a href="./" >Volver</a>';
 			}
}//else{
//	header ('location:./');
//}


?>