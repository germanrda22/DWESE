<?php

//Crea un script que añada valores a un array mientras que su longitud sea 
//menor que 120.
//Después mostrará la información del array por pantalla

$arr = [];

while(count($arr) < 121){
    array_push($arr, random_int(0,9));
}

function mostrararr($array){
    foreach($array as $i){
        echo $i, '<br>';
    }
}

mostrararr($arr);