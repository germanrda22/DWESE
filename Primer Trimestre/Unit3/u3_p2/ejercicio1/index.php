<?php
    $fichero = fopen("prueba.txt", "r");
    if ($fichero == true) {
        echo "El fichero se ha abierto";
    } else {
        echo "No se ha enocontrado el fichero";
    }
    
    // Pruebo con fichero que no existe
    $fichero2 = fopen("falso.txt", "r");
    if ($fichero2 == true) {
        echo "El fichero se ha abierto";
    } else {
        echo "No se ha enocontrado el fichero";
    }
?>