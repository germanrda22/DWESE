<?php

require_once("conexion.php");

$nombreErr = $emailErr = $apellidosErr = $contraseñaErr = "";
$nombre = $email = $apellidos =  $contraseña = "";
$error = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre"])) {
      $nombreErr = "Name is required";
      $error++;
    } else {
      $nombre = test_input($_POST["nombre"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$nombre)) {
        $nombreErr = "Only letters and white space allowed";
        $error++;
      }
    }

    if (empty($_POST["apellidos"])) {
        $apellidosErr = "Name is required";
        $error++;
      } else {
        $apellidos = test_input($_POST["apellidos"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$apellidos)) {
          $apellidosErr = "Only letters and white space allowed";
          $error++;
        }
      }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
      $error++;
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $error++;
      }
    }

    if (!empty($_POST['contraseña']) && strlen($_POST['contraseña']) >= 8) {
        $contraseña = $_POST['contraseña'];
    } else {
        echo "Introdue una contraseña de almenos 8 caracteres";
        $error++;
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql = "INSERT INTO usuarios values (null,'$nombre','$apellidos','$email','$contraseña',CURDATE());";
$insert = mysqli_query($conexion, $sql);
echo '<hr>';


if ($insert) {
    echo "Datos insertados correctamente";
} else {
    echo "Error: ".mysqli_error($conexion);
}

header("Location: index.php");
exit();
?>