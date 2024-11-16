   
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <title>Insertar</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <?php include './menu.php' ?>
        <form method="post" action="./insertar_logica.php">
            <label id="mascota_nombre">Nombre: <input id="mascota_nombre" name="mascota_nombre"
            type="text" required /></label>
            <label id="mascota_edad">Edad: <input id="mascota_edad"
            name="mascota_edad" type="text" required /></label>
            <label id="raza">Raza: <input id="raza" name="raza"
            type="text" required /></label>
            <label id="vacunado">Vacunado: <input id="vacunado"
            name="vacunado" type="text" required /></label>
            <legend>Sexo:</legend>

            <input type="radio" name="sexo" id="H" value="H" required>Hembra
            <input type="radio" name="sexo" id="M" value="M" required>Macho
            <br><span> </span><br>
            <input id="registrar" name="Registrar" type="submit" />
            <input id="limpiar" name="Limpiar" type="reset" />
        </form>
    </body>
</html>