<?php include("./conexion.php");
$sql = "UPDATE mascota SET mascota_nombre='$_POST[mascota_nombre]',mascota_edad='$_POST[mascota_edad]',sexo='$_POST[sexo]',raza='$_POST[raza]',vacunado='$_POST[vacunado]' WHERE identificador='$_POST[identificador]'";
$result = mysqli_query($link, $sql);
if (!mysqli_error($link)) {
?>
<script>
  alert("Se modifico correctamente");
</script>
<?php } else { ?>
<script>
  alert("Estamos en mantenimiento preventivo");
</script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=modificar.php">