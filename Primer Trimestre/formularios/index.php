
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Validar formularios</h1>
    <?php 
        if (isset($_GET['error'])){
            $error = $_GET['error'];
            if ($error == 'faltan_valores'){
                echo '<strong style="color:red">Introduce los datos en todos los campos</strong>';
            }
            
            if ($error == 'nombre'){
                echo '<strong style="color:red">Introduce bien el nombre</strong>';
            }
            
            if ($error == 'apellidos'){
                echo '<strong style="color:red">Los apellidos no son correctos</strong>';
            }
            
            if ($error == 'edad'){
                echo '<strong style="color:red">Introduce una edad correcta</strong>';
            }
            
            if ($error == 'email'){
                echo '<strong style="color:red">Introduce bien el email</strong>';
            }
            
            if ($error == 'pass'){
                echo '<strong style="color:red">Introduce una contraseña válida</strong>';
            }
    
        }else{
            $nombre = trim(htmlspecialchars($_REQUEST['nombre'], ENT_QUOTES, "UTF-8"));
        }
        print "<p> Su nombre es <strong> $nombre </strong> </p>\n";
    ?>
    <h1>Validar datos tipo texto en un form</h1>
    <form action="index.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" required="required" pattern="[a-zA-Z]+"><br>
        
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required="required" pattern="[a-zA-Z]+"><br>
        
        <label for="edad">Edad: </label>
        <input type="number" name="edad" required="required"><br>
        
        <label for="email">Email: </label>
        <input type="text" name="email" required="required"><br>
        
        <label for="pass">Contraseña: </label>
        <input type="password" name="pass" required="required"><br>

        <input type="submit" value ="Enviar">
    </form>
</body>
</html>