<?php include './conexion.php' ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php include './menu.php' ?>
    <table>
      <tr>
        <th>IDENTIFICADOR</th>
        <th>MASCOTA NOMBRE</th>
        <th>MASCOTA EDAD</th>
        <th>SEXO</th>
        <th>RAZA</th>
        <th>VACUNADO</th>
      </tr>
      <?php
      $sql = "SELECT * FROM mascota";
      $result = mysqli_query($link, $sql); //ejecuto la consulta
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?= $row['identificador']; ?></td>
        <td><?= $row['mascota_nombre']; ?></td>
        <td><?= $row['mascota_edad']; ?></td>
        <td><?= $row['sexo']; ?></td>
        <td><?= $row['raza']; ?></td>
        <td><?= $row['vacunado']; ?></td>
        <td><a href="modificar_formulario.php?mod=<?php print
        $row['identificador']; ?> ">Modificar</a></td>
        <td><a href="eliminar.php?eli=<?php print $row['identificador']; ?>
        ">Eliminar</a></td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>