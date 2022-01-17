<?php
// Escribe una función que calcule el máximo común divisor de dos 
// números y un programa para probarla.

function MCD(...$numeros)
{
    $max = gmp_gcd($numeros);
    return $max;
}

$num1 = $_GET['numero1'];
$num2 = $_GET['numero2'];
echo MCD($num1, $num2);