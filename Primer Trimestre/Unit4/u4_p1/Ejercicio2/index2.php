<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
</head>
<body>
    <form method="post">
        <h1>Selección de idioma</h1>
        <label for="Español"> Español <input type="radio" name="Idioma" value="spanish"> </label> <br>
        <label for="English"> English <input type="radio" name="Idioma" value="english"> </label>
        <input type="submit" value="Cambiar idioma">
        <hr>
    </form>
</body>
</html>

<?php

$idioma = $_POST['Idioma'];

if ($idioma == 'spanish'){
    setcookie('Spanish', 'Hola', time() + 3600 * 24);
    echo $_COOKIE['Spanish'];
}
else{
    setcookie('English', 'Hello', time() + 360 * 24);
    echo $_COOKIE['English'];
}
?>