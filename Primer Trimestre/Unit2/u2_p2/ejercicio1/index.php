<?php
/**Escribe la función calculador:
la función calculador recibe como argumentos dos números y  la operación
que debe de aplicarles ( en realidad, la función que queremos aplicar).
Según que función se le pase como argumento, devolverá un valor u otro. Suma, resta, multiplicación, etc. */

function calculadora($num1, $num2, $operador){
    
        if ($operador === "+") {
            echo "La suma de $num1 más $num2 es : ". ($num1 + $num2);
    
        } else if ($operador === "-") {
            echo "La resta de $num1 menos $num2 es: " . ($num1 - $num2);
    
        } else if ($operador === "*") {
            echo "La multiplicacion de $num1 por $num2 es: " . $num1 * $num2;
    
        } else if ($operador === "/") {
            echo "La división de $num1 entre $num2 es: " . $num1 / $num2;
            
        } else {
            echo "Has introducido un valor erróneo";
        }
}
$num1 = $_GET["numero1"];
$num2 = $_GET["numero2"];
$operador = $_GET["operador"];

if (isset($num1) && isset($num2) && isset($operador)){
    calculadora($num1, $num2, $operador);
}
else{
    echo "Introduce los valores";
}