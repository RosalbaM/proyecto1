 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>WoodArt</title>
   </head>
   <body>

     <br>

<?php

$id_emp = $_POST['id_emp'];
$rfc = $_POST['rfc'];
$puesto = $_POST['puesto'];

if ($id_emp!="") {
?>

  <table border="1" >
    <tr>
      <td>id_emp</td>
      <td>nombre</td>
      <td>paterno</td>
      <td>materno</td>
      <td>rfc</td>
       <td>imss</td>
       <td>puesto</td>
       <td>cuenta</td>
       <td>salario</td>
    </tr>

    <?php
     include("conexion.php");

    $consulta="SELECT * FROM empleado WHERE id_emp = $id_emp";

    $resultado=mysqli_query($conexion,$consulta);

    while($mostrar=mysqli_fetch_array($resultado)){
     ?>

    <tr>
      <td><?php echo $mostrar['id_emp'] ?></td>
      <td><?php echo $mostrar['nombre'] ?></td>
      <td><?php echo $mostrar['paterno'] ?></td>
      <td><?php echo $mostrar['materno'] ?></td>
      <td><?php echo $mostrar['rfc'] ?></td>
       <td><?php echo $mostrar['imss'] ?></td>
       <td><?php echo $mostrar['puesto'] ?></td>
       <td><?php echo $mostrar['cuenta'] ?></td>
       <td><?php echo $mostrar['salario'] ?></td>
    </tr>

  <?php
  }
   ?>

  </table>

<?php
}
?>






<?php
if ($rfc!="") {
?>

  <table border="1" >
    <tr>
      <td>id_emp</td>
      <td>nombre</td>
      <td>paterno</td>
      <td>materno</td>
      <td>rfc</td>
       <td>imss</td>
       <td>puesto</td>
       <td>cuenta</td>
       <td>salario</td>
    </tr>

    <?php
     include("conexion.php");

    $consulta="SELECT * FROM empleado WHERE rfc = '$rfc'";

    $resultado=mysqli_query($conexion,$consulta);

    while($mostrar=mysqli_fetch_array($resultado)){
     ?>

    <tr>
      <td><?php echo $mostrar['id_emp'] ?></td>
      <td><?php echo $mostrar['nombre'] ?></td>
      <td><?php echo $mostrar['paterno'] ?></td>
      <td><?php echo $mostrar['materno'] ?></td>
      <td><?php echo $mostrar['rfc'] ?></td>
       <td><?php echo $mostrar['imss'] ?></td>
       <td><?php echo $mostrar['puesto'] ?></td>
       <td><?php echo $mostrar['cuenta'] ?></td>
       <td><?php echo $mostrar['salario'] ?></td>
    </tr>

  <?php
  }
   ?>

  </table>

<?php
}
?>









<?php
if ($puesto!="") {
?>

  <table border="1" >
    <tr>
      <td>id_emp</td>
      <td>nombre</td>
      <td>paterno</td>
      <td>materno</td>
      <td>rfc</td>
       <td>imss</td>
       <td>puesto</td>
       <td>cuenta</td>
       <td>salario</td>
    </tr>

    <?php
     include("conexion.php");

    $consulta="SELECT * FROM empleado WHERE puesto = '$puesto'";

    $resultado=mysqli_query($conexion,$consulta);

    while($mostrar=mysqli_fetch_array($resultado)){
     ?>

    <tr>
      <td><?php echo $mostrar['id_emp'] ?></td>
      <td><?php echo $mostrar['nombre'] ?></td>
      <td><?php echo $mostrar['paterno'] ?></td>
      <td><?php echo $mostrar['materno'] ?></td>
      <td><?php echo $mostrar['rfc'] ?></td>
       <td><?php echo $mostrar['imss'] ?></td>
       <td><?php echo $mostrar['puesto'] ?></td>
       <td><?php echo $mostrar['cuenta'] ?></td>
       <td><?php echo $mostrar['salario'] ?></td>
    </tr>

  <?php
  }
   ?>

  </table>

<?php
}
?>









<?php
if ($id_emp=="" && $rfc=="" && $puesto=="") {
?>

  <table border="1" >
    <tr>
      <td>id_emp</td>
      <td>nombre</td>
      <td>paterno</td>
      <td>materno</td>
      <td>rfc</td>
       <td>imss</td>
       <td>puesto</td>
       <td>cuenta</td>
       <td>salario</td>
    </tr>

    <?php
     include("conexion.php");

    $consulta="SELECT * FROM empleado ORDER BY id_emp";

    $resultado=mysqli_query($conexion,$consulta);

    while($mostrar=mysqli_fetch_array($resultado)){
     ?>

    <tr>
      <td><?php echo $mostrar['id_emp'] ?></td>
      <td><?php echo $mostrar['nombre'] ?></td>
      <td><?php echo $mostrar['paterno'] ?></td>
      <td><?php echo $mostrar['materno'] ?></td>
      <td><?php echo $mostrar['rfc'] ?></td>
       <td><?php echo $mostrar['imss'] ?></td>
       <td><?php echo $mostrar['puesto'] ?></td>
       <td><?php echo $mostrar['cuenta'] ?></td>
       <td><?php echo $mostrar['salario'] ?></td>
    </tr>

  <?php
  }
   ?>

  </table>

<?php
}
?>

   </body>
 </html>
