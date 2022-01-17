<?php
// Modifica el ejercicio cálculo de un factorial para que controle si el 
// argumento es negativo utilizando una excepción.
//Usa: InvalidArgumentException
function factorial($num){
    $resultado = 1;
    for ($i = 1; $i <= $num; $i++){
        $resultado = $resultado * $i;
    }
    return $resultado;
}

$num = $_GET["numero"];

try{
    if (isset($_GET["numero"])){
        try{
            if ($num >= 0){
                echo "El factorial de $num es ".factorial($num);
            }else {
                throw new InvalidArgumentException(' El número es negativo');
            }
        } catch (Exception $e) {
            echo "Error".$e->getMessage()."<br>";
        }
    }else {
        throw new Exception('Faltan parámetros por la URL');
    }
} catch (Exception $ex) {
    echo "Error".$e->getMessage()."<br>";
}