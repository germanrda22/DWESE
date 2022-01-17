<?php
    require_once 'configuracion.php';
    // no me creo un objeto, en su lugar:
    Configuracion::setColor("blue");
    Configuracion::setEntorno("localhost");
    Configuracion::setNewsletter(true);

    echo Configuracion::$color. '<br>'; //mostramos la propiedad estatica
    echo Configuracion::$entorno. '<br>';
    echo Configuracion::$newsletter. '<br>';


    $configuracion = new Configuracion(); //Si quiero puedo instanciar el objeto
    $configuracion::$color = "rojo";
    $configuracion::$entorno = "localhost";
    // Asi accedo a las propiedades
    echo $configuracion::$color;

?>