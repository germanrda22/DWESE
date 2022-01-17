<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        if(isset($_GET['error'])){
            echo "<p>Introduzca todos los datos</p><br>";
        }
    ?>
    <form action="procesar.php" method="POST">
        Usuario
    </form>
</body>
</html>