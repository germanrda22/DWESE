<?php
    session_start();

    $variable_normal = "Soy una cadena de caracteres <br>";

    $_SESSION['variable_persistente'] = "Soy una sesión activa";

    echo $variable_normal."<br>";
    echo $_SESSION['variable_persistente']."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>
<body>
    <br><a href="pagina1.php">Ir a otra página</a>
    <br><a href="logout.php">Cerrar sesión</a>
</body>
</html>