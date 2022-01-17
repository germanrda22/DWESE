<?php
// Programa que compruebe que si una variable esta vacía
// en caso de que lo esté se rellenará con una frase en minúscula y a 
// continuación se mostrará por pantalla en mayúscula
// si no lo está se saca el contenido de la variable

function cadenaVacia($cadena = null){
    if ($cadena == null){
        $cadena = "la cadena estaba vacía";
        $cadena = strtoupper($cadena);
        return $cadena;
    } else {
        echo $cadena;
    }
}

$cadena = $_GET['cadena'];
echo cadenaVacia($cadena);