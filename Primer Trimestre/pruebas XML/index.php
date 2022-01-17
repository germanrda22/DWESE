<?php
    /*
    simplexml_load_file lee un fichero XML y devuelve un objeto de la clase
    SimpleXMLElement. El fichero se manipula a través de este objeto
    */
    $datos = simplexml_load_file("empleados.xml");
    echo "<br>";
    if ($datos===false){
        echo "Error al leer el fichero";
    }
    /*
    Lo recorremos como un array y obtenemos los hijos del elemento raiz
    */
    foreach($datos as $valor){
        print_r($valor);
        echo "<br>";
    }
?>