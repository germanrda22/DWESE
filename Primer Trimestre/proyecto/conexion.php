<?php
$servername = "localhost";
$database = "proyecto"; 
$username = "root"; 
$password = "";

$conexion = mysqli_connect($servername, $username, $password, $database);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conectado a la base de datos";

echo "<br>";

mysqli_query($conexion,"SET NAME 'utf8'");

?>