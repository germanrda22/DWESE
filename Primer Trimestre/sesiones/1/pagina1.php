<?php
    session_start();

    echo "La variable local del otro fichero no podré imprimirla";
    echo $variable_normal. "<br>";

    echo "El contenido de mi sesión si lo tengo disponible: ";
    echo $_SESSION['variable_persistente']. "<br>";
?>