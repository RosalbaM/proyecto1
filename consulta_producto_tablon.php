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
    			<td>id_producto</td>
    			<td>nombre</td>
    			<td>largo</td>
    			<td>ancho</td>
    			<td>grosor</td>
          <td>tipo_madera</td>
          <td>costo</td>
          <td>stock</td>
    		</tr>

    		<?php
        include("conexion.php");
    		//$consulta="SELECT * FROM producto WHERE nombre LIKE 'tablon%' ORDER BY id_producto";
        $consulta="SELECT p.id_producto, p.nombre ,p.largo, p.ancho, p.grosor, t.nombre as tipo_madera, p.costo, p.stock FROM producto p, tipo_madera t WHERE t.id_tipo_madera = p.id_tipo_madera AND p.nombre LIKE 'tablon%' ORDER BY p.id_producto";
    		$resultado=mysqli_query($conexion,$consulta);

    		while($mostrar=mysqli_fetch_array($resultado)){
    		 ?>

    		<tr>
    			<td><?php echo $mostrar['id_producto'] ?></td>
    			<td><?php echo $mostrar['nombre'] ?></td>
    			<td><?php echo $mostrar['largo'] ?></td>
    			<td><?php echo $mostrar['ancho'] ?></td>
    			<td><?php echo $mostrar['grosor'] ?></td>
          <td><?php echo $mostrar['tipo_madera'] ?></td>
          <td><?php echo $mostrar['costo'] ?></td>
          <td><?php echo $mostrar['stock'] ?></td>
    		</tr>
    	<?php
    	}
    	 ?>
    	</table>

  </body>
</html>
