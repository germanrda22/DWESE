<?php 
include "conexion.php";
session_start();

require "funciones.php";

if (!isset($_POST['titulo'])){
    $titulo = "";
}

if (!isset($_POST['descripcion'])){
    $descripcion = "";
}

?>  
<!DOCTYPE html> 
<html lang="es"> 
    <head>     
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    </head>  
    <body>     
        <form action="#" method="post">
            ID Usuario:
            <?php
            $email = $_SESSION['email'];
            $usuario = seleccionarUsuario($conexion,$email);
            $id = mysqli_fetch_array($usuario);

            ?>
            <br><br>
            <label for="categoria">ID Categoria </label>
            <select name="categoria">
            <?php
                    $categorias = conseguirCategorias($conexion);
                    if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                            <option value="<?=$categoria['id']?>"> <?=$categoria['id']?> </option>
                <?php
                        endwhile;
                    endif;
                ?>
            </select><br><br>
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" value=""><br><br>
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion" value=""><br><br>
            <input type="submit" name="submit" value="Crear"> 
        </form> 
    </body>  
</html>

<?php 

    $error = 0;

    if(isset($_POST['submit'])){     
        if (empty($_POST["titulo"])) {
            $titulo_Err = "Se requiere un titulo";
            $error++;
        }else {
            $titulo = test_input($_POST["titulo"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$titulo)) {
                $titulo_Err = "Solo permitidas letras y espacios en blanco";
                $error++;
            }
        }
        if (empty($_POST["descripcion"])) {
                $descripcion_Err = "Se requiere una descripcion";
                $error++;
        }else {
            $descripcion = test_input($_POST["descripcion"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$descripcion)) {
                $descripcion_Err = "Solo permitidas letras y espacios en blanco";
                $error++;
            }
        }  
    }

    if($error == 0){
        $id_usuario = $id['id'];
        $id_categoria = $_REQUEST['categoria'];
        $sql = "INSERT INTO entradas  VALUES (null,'$id_usuario','$id_categoria','$titulo','$descripcion',CURDATE());";
        $insert = mysqli_query($conexion,$sql);
        echo "<br>";
        
        if ($insert){
            echo "Datos insertados correctamente";
        }else{
            echo "Error".mysqli_error($conexion);
        }
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>

<button onclick="location.href='usuarioLogueado.php'">Volver</button>