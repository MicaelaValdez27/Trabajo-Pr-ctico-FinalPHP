<?php 
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

//X5DDgh7DrT

$conexion = mysqli_connect('sql211.infinityfree.com', 'if0_36893072', 'X5DDgh7DrT', 'if0_36893072_php_inicial') or exit ("No se pudo conectar a la base de datos");


mysqli_query($conexion, "INSERT INTO consultas VALUES(DEFAULT, '$nombre', '$email', '$mensaje')");

mysqli_close($conexion);

header('Location:contacto.php?ok');


