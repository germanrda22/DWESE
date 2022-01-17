<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if ($_POST['usuario']==="usuario" and $_POST['clave']==="1234"){
        header("Location:index.html");
    }else {
        $err = true;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de login</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php if (isset($err)){
            echo "<p> Revise usuario y contraseña</p>";
        }?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <p>
                <label for="usuario">Nombre: </label>
                <input type="text" name="usuario"/>
            </p>
            <p>
                <label for="clave">Contraseña</label>
                <input type="password" name="clave" />
            </p>
            <p><input type="submit" value="enviar datos" /></p>
        </form>
    </body>
</html>
