<?php
// Ejemplo 2: uso de return
function devuelveElNombre($nombre){
    return $nombre;
}
echo devuelveElNombre('Rut');

// Ejemplo 3: 
function calculadora($num1, $num2, $negrita = false){
    $suma = $num1 + $num2;
    $producto = $num1 * $num2;
    $division = $num1 / $num2;
    $resta = $num1 - $num2;
    $cadena_texto = "";
    if ($negrita){
        $cadena_texto.="<h1>";
    }
    $cadena_texto.="Calculadora <br/>";
    $cadena_texto.="Suma: $suma <br/>";
    $cadena_texto.="Resta: $resta <br/>";
    $cadena_texto.="Multiplicación: $producto <br/>";
    $cadena_texto.="División: $division <br/>";
    
    if ($negrita){
        $cadena_texto.="</h1>";
    }
    $cadena_texto.="<hr/>";
    return $cadena_texto;
}

echo calculadora(10, 5);
echo calculadora(4, 3, true);
echo calculadora(7, 4, false);

// Ejemplo 4: 
function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function muestraNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
            ."<br>".
            getApellidos($apellidos);
    return $texto;
}


$frase = "Es el año ";
function mifuncion(){
    global $frase;
    $year = 2021;
    echo "<h1> $frase </h1>";
    return $year;
}
echo mifuncion();