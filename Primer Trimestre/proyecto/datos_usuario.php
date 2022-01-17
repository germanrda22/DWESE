<?php
session_start();
require_once "conexion.php";

echo "Datos del usuario:<br><br>";
$sesion = $_SESSION['email'];


$sql = "SELECT * FROM usuarios WHERE email = '$sesion'";
$buscar = mysqli_query($conexion, $sql);


$fila = mysqli_fetch_assoc($buscar); 

foreach ($fila as $value) { 
    echo $value . "<br>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Formulario de actualización de datos</h3>
    <form action="#" method="post">
        <label for="nuevo_nombre">Nombre </label><input type="text" name="nuevo_nombre">
        <br>
        <label for="nuevos_apellidos">Apellidos </label><input type="text" name="nuevos_apellidos">
        <br>
        <label for="nuevo_email">Correo </label><input type="email" name="nuevo_email">
        <br>
        <label for="nueva_password">Contraseña </label><input type="password" name="password">
        <br>
        <input type="submit" value="Actualizar datos" name="submit">
    </form>

</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $error = 0; 

    if (!empty($_POST['nuevo_nombre']) && !is_numeric($_POST['nuevo_nombre'])) {
        $nombre = trim($_POST['nuevo_nombre']); 
        echo "$nombre <br>";
    } else {
        echo "Introduce un nombre válido";
        $error++;
    }

    if (!empty($_POST['nuevos_apellidos']) || !is_numeric(($_POST['nuevos_apellidos']))) {
        $apellidos = $_POST['nuevos_apellidos'];
        echo "$apellidos<br>";
    } else {
        echo "Introduce un apellido válido";
        $error++;
    }
    
    if (filter_var($_POST['nuevo_email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['nuevo_email'];
        $sql = 'SELECT * form usuarios where email = ' . $email . '';
        $comprobacion = mysqli_query($conexion, $sql);
        if (empty($comprobacion)) {
            echo "$email <br>";
        } else {
            $error++;
        }
    } else {
        echo "Introduce un correo válido";
        $error++;
    }

    if (isset($_POST['password']) && strlen($_POST['password']) >= 8) {
        $password = $_POST['password'];
        //$password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 4]); // Encriptar
        echo "$password <br>";
    } else {
        echo "Introduce una contraseña de almenos 8 caracteres";
        $error++;
    }

    if ($error == 0) { 

        $sql = "UPDATE usuarios set 
        nombre = '$nombre', 
        apellidos = '$apellidos',
        email = '$email', 
        password = '$password', 
        fecha = curdate()
        WHERE email = '$sesion'";

        $insert = mysqli_query($conexion, $sql);

        echo "Datos del nuevo usuario introducidos correctamente";
    }
}


?>
<hr>
<button onclick="location.href='logueado.php'">Volver a inicio</button>