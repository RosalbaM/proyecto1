<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WoodArt</title>
  </head>
  <body>

    <br>

    	<table border="1" >
    		<tr>
    			<td>id_cliente</td>
    			<td>nombre</td>
    			<td>paterno</td>
    			<td>materno</td>
    			<td>direccion</td>
          <td>telefono</td>
          <td>correo</td>
          <td>contraseña</td>
    		</tr>

    		<?php
        include("conexion.php");
        $consulta ="SELECT * FROM cliente";
    		//$consulta="SELECT * FROM cliente where correo='rodrigo@hotmail.com' and contraseña = '1234'";
        //$consulta="SELECT p.id_producto, p.nombre ,p.largo, p.ancho, p.grosor, t.nombre as tipo_madera, p.costo, p.stock FROM producto p, tipo_madera t WHERE t.id_tipo_madera = p.id_tipo_madera AND p.nombre LIKE 'gualdra%' ORDER BY p.id_producto";
    		$resultado=mysqli_query($conexion,$consulta);

    		while($mostrar=mysqli_fetch_array($resultado)){
    		 ?>

    		<tr>
    			<td><?php echo $mostrar['id_cliente'] ?></td>
    			<td><?php echo $mostrar['nombre'] ?></td>
    			<td><?php echo $mostrar['paterno'] ?></td>
    			<td><?php echo $mostrar['materno'] ?></td>
    			<td><?php echo $mostrar['direccion'] ?></td>
          <td><?php echo $mostrar['telefono'] ?></td>
          <td><?php echo $mostrar['correo'] ?></td>
          <td><?php echo $mostrar['contraseña'] ?></td>
    		</tr>
    	<?php
    	}
    	 ?>
    	</table>

  </body>
</html>
