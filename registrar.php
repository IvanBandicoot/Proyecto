<?php 

include 'conexion.php';

//recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["email"];
$contrasena = $_POST["password"];
$confirmar = $_POST["password1"];
$mes = $_POST["mes"];
$dia = $_POST["dia"];
$año = $_POST["año"];

//consulta para insertar
$insertar = "INSERT INTO usuarios(nombre, apellido, correo, contrasena, confirmar, mes, dia, ano) VALUES
                        ('nombre', 'apellido', 'correo', 'contrasena', 'confirmar', 'mes', 'dia', 'año')";

$insertar2 = "INSERT INTO login(correo, contrasena) VALUES ('correo', 'contrasena')";

//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
$resultado2 = mysqli_query($conexion, $insertar2);

if(!$resultado){
    echo "error al registrarse";
}else{
    echo "<h1>Usuario registrado exitosamente</h1>";
}

if(!$resultado2){
    echo "error al registrarse";
}else{
    echo '<script>
           alert("Bienvenido a SocialSearch");
          </script>';
    header("Location: http://localhost/proyecto/galeria.html");
}

/*
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuarios = '$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
   echo'<script>
         alert("El usuario ya esta registrado");
         window.history.go(-1);
        </script>';
   exit;
}*/


//cerrar la conexion

mysqli_close($conexion);

?>