<?php
// Escribe una función para calcular el factorial de un número que 
// recibirá como argumento

function factorial($num){
    $resultado = 1;
    for ($i = 1; $i <= $num; $i++){
        $resultado = $resultado * $i;
    }
    return $resultado;
}

$num = $_GET["numero"];
echo "El factorial de $num es ".factorial($num);