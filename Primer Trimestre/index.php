<?php
    $usuarioBD = "root";
    $passBD = "root";
    $servidorBD = "127.0.0.1";
    $nombreBD = "prueba";

    $conn = new mysqli($servidorBD, $usuarioBD, $passBD, $nombreBD);
    if($conn->connect_error){
        die("ERROR: No se puede conectar al servidor: ". $conn->connect_error);
    }

    echo "Conectado a la base de datos";

?>

<?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';
try{
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexion realizada con exito";
}catch (PDOException $e){
    echo 'Error con la base de datos: '. $e->getMessage();
}