<?php
    // Las variables duperglobales estan disponibles en todos los ámbitos
    // Variables de servidor
    echo "La ip de mi servidor: " .$_SERVER['SERVER_ADDR']. "<br>";
    echo "Nombre del servidor: " .$_SERVER['SERVER_NAME']. "<br>";
    echo "Software del servidor: " .$SERVER['SERVER_SOFTWARE']. "<br>";
    echo "Portocolo: " .$SERVER['SERVER_PROTOCOL']. "<br>";
    echo "Método de pertición: " .$SERVER['SERVER_METHOD'];