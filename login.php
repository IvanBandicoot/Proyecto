<?php
  include 'conexion.php';

  $correo = $_POST["correo"];
  $password = $_POST["password"];
  mysqli_select_db("registre",$conexion) or die ("Error al conectar la base de datos");
  $registros = mysql_query("SELECT * FROM login WHERE contrasena = '$password'");
  
  while($registro = mysql_fecth_array($registros)){
      echo $registro['contrasena']." ".$registro['nombre']." ".$registro['apellido'];
  }

$verificar_correo = mysqli_query($conexion, "SELECT * FROM login WHERE correo = '$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
   echo'<script>
         alert("El usuario ya esta registrado");
         window.history.go(-1);
        </script>';
   exit;
}

?>