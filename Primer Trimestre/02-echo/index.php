<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Imprimir en la pantalla el contenido PHP</title>
    </head>
    <body>
        <h1>Ejercicio para practicar con "echo"</h1>
        <?php
        //voy a usar el punto para poder concatenar cadenas
          echo "<h3>Listado de videojuegos: </h3>";
          echo "<ul>"
             . "<li>Fifa</li>"
             . "<li>Mario</li>"
             . "</ul>";
          echo '<p> Esta es toda'.' - '.'mi lista de juegos</p>';
          
        ?>
    </body>
</html>