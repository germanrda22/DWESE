<?php
    $fichero = fopen("index.txt", "r"); // Abrimos en modo lectura
    if ($fichero == true) {
        while (!feof($fichero)) {
            $linea = fgets($fichero); // Mostramos línea  a línea
            echo $linea."<br>";
        }
    } else {
        echo "No existe el archivo <br>";
    }
    fclose($fichero);

    $fichero = fopen("index.txt", "w"); // Abrimos en modo escritura
    if ($fichero == true) {
        fwrite($fichero, "Esta línea es nueva" . PHP_EOL);
        fwrite($fichero, "Otra línea nueva" . PHP_EOL);
    } else {
        echo "No existe el archivo";
    }
    fclose($fichero);

    // Copiamos el archivo

    if (copy('index.txt', 'index_copia.txt')) {
        echo 'Se ha copiado el archivo corretamente <br>';
    } else {
        echo 'Se produjo un error al copiar el fichero <br>';
    }

    // Renombramos el archivo de texto anterior
    if (rename("index_copia.txt", "fichero_definitivo.txt")) {
        echo "Se ha renombrado el archivo correctamente <br>";
    } else {
        echo "Error al renombrar <br>";
    }

    // Eliminar archivo antiguo

    if (unlink("index.txt")) {
        echo "Se ha eliminado correctamente <br>";
    } else {
        echo "Error al eliminar <br>";
    }
?>