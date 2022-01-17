<?php
    $archivo = $_FILES['archivo'];
    //var_dump($archivo);
    //die();
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];
    if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png'){
        if (!is_dir('imagenes')){
            mkdir('imagenes', 0777);
        }
        move_uploaded_file($archivo['tmp_name'], 'imagenes/'.$nombre);
        header("Refresh:5; URL=index.php");
        echo "<h1>Imagen subida correctamente</h1>";
    }else{
        header("Refresh:5; URL=index.php");
        echo "<h1>Sube una imagen con formato correcto</h1>";
    }

/*
    $imagen = $_FILES['imagen']['name'];
    $path = "imagenes/".basename($_FILES['imagen']['name']);

    if(move_uploaded_file($_FILES['imagen']['tmp_name'], $path)){
        echo "El archivo ".basename($_FILES['imagen']['name']). "ha sido subido";
        echo "<img src=imagenes/>".$imagen.">";
    }else{
        echo "El archivo no se ha subido correctamente";
    }
*/
?>