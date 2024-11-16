<?php include "./conexion.php"; ?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Formulario</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
<body>
  <?php
  $sql = "SELECT * FROM mascota WHERE identificador ='$_GET[mod]'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <form id="form1" name="form1" method="post"
  action="modificar_logica.php">
    <label for="textfield">Nombre: <input type="text" name="mascota_nombre"
    id="mascota_nombre" value="<?php print $row['mascota_nombre']; ?>" /></label>
    <label for="textfield2">Edad: <input type="text" name="mascota_edad"
    id="mascota_edad" value="<?php print $row['mascota_edad']; ?>" /></label>
    <label for="textfield3">Raza: <input type="text" name="raza"
    id="raza" value="<?php print $row['raza']; ?>" /></label>
    <label for="textfield4">Vacunado: <input type="text" name="vacunado"
    id="vacunado" value="<?php print $row['vacunado']; ?>" /></label>
    <legend>Sexo:</legend>
    <?php if ($row['sexo'] == 'H') { ?>
    <input type="radio" name="sexo" value="H" id="H" checked="checked"
    />
    <?php } else { ?> <input type="radio" name="sexo" value="H" id="H"
    /><?php } ?>
    <label for="H">Femenino</label>
    <?php if ($row['sexo'] == 'M') { ?>
    <input type="radio" name="sexo" value="M" id="M" checked="checked"
    />

    <?php } else { ?> <input type="radio" name="sexo" value="M" id="M"
    /><?php } ?>
    <label for="M">Masculino</label>

    <input type="submit" name="submit" id="submit" value="Enviar">
  </form>
</body>
</html>