<?php
    /*
    Con la clase DOMDocument validamos empleados.xml usando
    el esquema departamento.xsd
    */
    $dept = new DOMDocument();
    $dept->load('empleados.xml');
    $res = $dept->schemaValidate('departamento.xsd');
    if ($res){
        echo "El fichero es válido";
    }else{
        echo "Fichero no válido";
    }
?>