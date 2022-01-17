<?php
    header("Cache-Control: no-cache, must-revalidate");
    header("Refresh: 10; URL". $_SERVER["PHP_SELF"]);

    echo "<center><h3>Con la funcion header hemos especificado que esta pagina no se guarde en memoria caché, 
    si no que llame a la mísma página original cada 10 segundos. Puede comprobarse dejando la página sin 
    actualizar durante 10 segundos o pulsando sobre Actualizar.</h3></center>";

    setlocale(LC_ALL, "spanish");
    $hora=gettimeofday();
    echo strftime("%A, %d, de %B de %Y, a las %H:%M:%S", $hora['sec']);
    echo "Se repite la carga de la página";
    echo strftime("%A, %d, de %B de %Y, a las %H:%M:%S", time());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo3</title>
</head>
<body>
    <center>
    <a href="<?php echo $_SERVER["PHP_SELF"];?>">Actualizar</a>
    </center>    
</body>
</html>