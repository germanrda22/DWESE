<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Subida de archivos con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" value="Enviar">
    </form>
    <h2>Listado de imágenes</h2>
    <?php
        if (!is_dir('./imagenes')){ // Indica si el nombre de archivo es un directorio
            // Si no existe lo creo
            mkdir('./imagenes', 0777) or die('No se puede crear la carpeta');// Se le dan todos los permisos
        }else{
            $gestor = opendir('./imagenes');
            if($gestor):

                while(($image = readdir($gestor)) !== false):
                    if($image != '.' && $image != '..'):
                        echo "<img src='imagenes/$image' width='200px' /><br>";
                    endif;
                endwhile;
            endif;
        }   
    ?>
</body>
</html>