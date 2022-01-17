<?php
$error = 'faltan_valores';

if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])){
    $error = 'ok';
    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
        $error = 'nombre';
    }
    
    if (!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)){
        $error = 'apellidos';
    }
    
    if (!is_string($edad) || filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'edad';
    }
    
    if (!is_string($email) || filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    
    /*if (!is_string($pass) || ){
        $error = 'pass';
    }*/
}
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validación de formularios</title>
    </head>
    <body>
        <?php if ($error == 'ok'):?>
        <h1>Datos válidos correctamente</h1>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
                
        <?php endif;?>
    </body>
</html>