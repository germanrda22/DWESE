<?php
    $archivo = $_POST['archivo'];
    $archivo = fopen($archivo , "r");
    if ($archivo == true) {
        while (!feof($archivo)) {
            $linea = fgets($archivo); // Mostramos línea  a línea
            echo $linea . "<br>";
        }
    } else {
        echo "No existe el archivo <br>";
    }
    fclose($archivo);
?>