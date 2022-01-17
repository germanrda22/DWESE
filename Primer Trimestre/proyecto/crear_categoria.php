<?php
require_once "conexion.php";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="logueado.php" method="post">
        <label for="categoria">Nombre categoria </label><input type="text" name="categoria">
        <br><br>
        <input type="submit" name="submit" value="Crear">
    </form>
</body>

</html>

<?php
if(isset($_POST['submit'])){
    if(!isset($_POST['categoria'])){
        echo "Error";
    }else{
        $categoria = $_POST['categoria'];

        $sql = "INSERT INTO categorias (id, nombre) VALUES (null, '$categoria');";
        $crear = mysqli_query($conexion, $sql);
        echo "Datos insertados correctamente.";
    }
}
    
?>

<button onclick="location.href='usuarioLogueado.php'">Volver</button>