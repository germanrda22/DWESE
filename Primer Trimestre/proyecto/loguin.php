<?php
session_start();


require_once "conexion.php";

$error = 0; 

if (empty($_POST['email'])) {
    echo "Introduce un email válido";
    $error++;
} else {
    $email = $_POST['email'];
}
if (empty($_POST['contraseña']) || strlen($_POST['contraseña']) < 8) {
    echo "Introduce una contraseña de al menos 8 caracteres";
    $error++;
} else {
    $contraseña = $_POST['contraseña'];
}

if ($error == 0) {

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$contraseña';";
    $consulta = mysqli_query ($conexion, $sql);

    $filas = mysqli_num_rows($consulta); 

    if($filas == 0){ 
        
        echo "Datos introducidos incorrectos";

    }else{
        $_SESSION['email'] = $email;
        echo "Bienvenid@"; 
        header('Location: usuarioLogueado.php');
    }
         
}