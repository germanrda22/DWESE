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
    <h3>Editor de entradas</h3>
    <form action="#" method="post">
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
        <input type="submit" name="submit" value="Actualizar entrada">

    </form>

</body>

</html>

<?php
if (isset($_POST['submit'])) {

        $id_entrada = $_REQUEST['entrada'];

        $sql = "DELETE FROM entradas where id = '$id_entrada';";

        $insert = mysqli_query($conexion, $sql);
        echo "<br>";

        if ($insert) {
            echo "Datos borrados correctamente";
        } else {
            echo "Error" . mysqli_error($conexion);
        }

}
?>

<hr>
<button onclick="location.href='usuarioLogueado.php'">Volver a inicio</button>