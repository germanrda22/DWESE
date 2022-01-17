<?php
    $datos = simplexml_load_file("empleados.xml");
    /*
    El método xpath permite seleccionar elementos usando una expresión
    */
    $edades = $datos->xpath("//edad");
    foreach($edades as $valor){
        print_r($valor);
        echo "<br>";
    }
?>