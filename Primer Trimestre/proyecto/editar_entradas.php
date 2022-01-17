<?php
session_start();
include 'conexion.php';
require 'funciones.php';

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Editar las entradas</h2>
    <form action="#" method="post">
        ID Usuario:
        <?php
        $email = $_SESSION['email'];
        $usuario = seleccionarUsuario($conexion, $email);
        $id = mysqli_fetch_array($usuario);

        ?>
        <br><br>
        <label for="categoria">ID Categoria </label>
        <select name="categoria">
            <?php
            $categorias = conseguirCategorias($conexion);
            if (!empty($categorias)) :
                while ($categoria = mysqli_fetch_assoc($categorias)) :
            ?>
                    <option value="<?= $categoria['id'] ?>"> <?= $categoria['id'] ?> </option>
            <?php
                endwhile;
            endif;
            ?>
        </select><br>

        <label for="entrada">Entradas</label>
        <select name="entrada">
            <?php
            $entradas = conseguirEntradas($conexion);
            if (!empty($entradas)) :
                while ($entrada = mysqli_fetch_assoc($entradas)) :

            ?>
                    <option value=<?= $entrada['id'] ?>> <?= $opcion = $entrada['id'] ?> </option>

            <?php
                endwhile;
            endif;
            ?>
        </select>
        <br>
        <label for="titulo">Titulo de la entrada</label><input type="text" name="titulo" id="titulo">
        <br>
        <label for="descripcion">Descripcion</label><input type="text" name="descripcion" id="descripcion">
        <br>
        <input type="submit" name="submit" value="Actualizar entrada">

    </form>

</body>

</html>

<?php

$error = 0;

if (isset($_POST['submit'])) {


    if (empty($_POST["titulo"])) {
        $titulo_Err = "¡Se requiere titulo!";
        $error++;
    } else {
        $titulo = test_input($_POST["titulo"]);
    
        if (!preg_match("/^[a-zA-Z-' ]*$/", $titulo)) {
            $titulo_Err = "Solo letras y espacios en blanco";
            $error++;
        }
    }
    if (empty($_POST["descripcion"])) {
        $descripcion_Err = "¡Se requiere descripcion!";
        $error++;
    } else {
        $descripcion = test_input($_POST["descripcion"]);
        
        if (!preg_match("/^[a-zA-Z-' ]*$/", $descripcion)) {
            $descripcion_Err = "Solo letras y espacios en blanco";
            $error++;
        }
    }

    if ($error == 0) {
        $id_usuario = $id['id'];
        $id_categoria = $_REQUEST['categoria'];
        $id_entrada = $_REQUEST['entrada'];

        $sql = "UPDATE entradas SET
         usuario_id ='$id_usuario', 
         categoria_id ='$id_categoria', 
         titulo='$titulo', 
         descripcion ='$descripcion', 
         fecha = curdate() 
         where id = '$id_entrada';";

        $insert = mysqli_query($conexion, $sql);
        echo "<br>";

        if ($insert) {
            echo "Datos insertados correctamente";
        } else {
            echo "Error" . mysqli_error($conexion);
        }
    }  
}


?>

<hr>
<button onclick="location.href='usuarioLogueado.php'">Volver a inicio</button>