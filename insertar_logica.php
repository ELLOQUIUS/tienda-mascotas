<?php
  include "./conexion.php";
  $sql="INSERT INTO mascota (mascota_nombre,mascota_edad,raza,sexo,vacunado) VALUES
  ('$_POST[mascota_nombre]','$_POST[mascota_edad]','$_POST[sexo]','$_POST[raza]',
  '$_POST[vacunado]')";
  $result = mysqli_query($link, $sql); //ejecuto la consulta
  if (!mysqli_error($link)) {
  ?>
  <script>
    alert("Se ingreso con total normalidad");
  </script>
  <?php
  }else{
  ?>
  <script>
    alert ("Estamos en mantenimiento preventivo");
  </script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=insertar.php">