<?php
// Escribe una función para comprobar si un número es primo y 
// un programa para probarla

function primos($num){
    
    for ($i = 2; $i <= $num/2 ; $i++){
        if ($num % $i == 0){
            return "No es primo";
        }
    }
    return "Es primo";
}

echo primos($_GET['numero']);