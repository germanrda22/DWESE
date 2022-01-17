<?php
// Escribe una  función para calcular potencias. 
// La función recibe como argumentos la base y el exponente 
// (que es opcional y tiene por defecto el valor 2)

function calculaPotencias($base, $exponente = 2){
    return $base ** $exponente;
}
$base = $_GET['base'];
$exponente = $_GET['exponente'];
echo calculaPotencias($base, $exponente);