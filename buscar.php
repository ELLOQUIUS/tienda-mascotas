<?php include './conexion.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Buscar</title>
  </head>
  <body>
    <?php include './menu.php' ?>
    <form method="POST" name="form1">
      <div class="buscador">
        <label for="mascota_nombre">Nombre: </label>
        <input type="text" name="mascota_nombre" id="mascota_nombre" />
        <input type="submit" value="buscar" />
      </div>
      <br>
    </form>
    <?php if (isset($_POST['mascota_nombre'])) { ?>
    <table>
      <tr>
        <th >IDENTIFICADOR</th>
        <th >NOMBRE MASCOTA</th>
        <th >EDAD MASCOTA</th>
        <th >SEXO</th>
        <th >RAZA</th>
        <th >VACUNADO</th>
      </tr>
      <?php
      $sql = "SELECT * FROM mascota WHERE mascota_nombre='$_POST[mascota_nombre]'";
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
      </tr> <?php } ?>
    </table> <?php } ?>
  </body>
</html>