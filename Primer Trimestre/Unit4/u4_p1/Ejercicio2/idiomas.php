<?php
    /*Crea un formulario que nos permita
    al usuario cambiar de idioma y 
    recordar lo que ha elegido en 
    proximas visitas a nuestra web*/
    if(!isset($_COOKIE['idioma']) or $_COOKIE['idioma']==="es"){
        $esp_checked = "checked";
        $en_checked = "";
    }else{
        $esp_checked = "";
        $en_checked = "checked";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página en inglés o español</title>
</head>
<body>
    Seleccione idioma<br>
    <form action="set_idioma.php" method="POST">
        Español<input type="radio" <?php echo $esp_checked?> name="idioma" value="es"><br>
        Inglés<input type="radio"  <?php echo $en_checked?> name="idioma" value="en">
        <input type="submit" value="Cambiar idioma"><hr>
    </form>
    <?php
        if(!isset($_COOKIE['idioma']) or $_COOKIE['idioma']==="es"){
            echo "Hola";
        }else{
            echo "Hello";
        }
    ?>
</body>
</html>