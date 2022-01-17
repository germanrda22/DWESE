<?php
    // Crear un directorio o una carpeta
    if (!is_dir('mi_carpeta')){ // Indica si el nombre de archivo es un directorio
        // Si no existe lo creo
        mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');// Se le dan todos los permisos
    }else{
        echo "Ya existe la carpeta";
    }

    echo "<hr><h1>Contenido de mi carpeta</h1>";
    // Recorrer contenido en un directorio

    if ($gestor = opendir('./mi_carpeta')){
        while(false != ($archivo = readdir($gestor))){
            if ($archivo != '.' && $archivo != '..'){
                echo $archivo."<br>";// Mientras haya archivos dentro del directorio
            }
        }
    }
    // Borrar directorios
    //rmdir('mi_carpeta');
?>