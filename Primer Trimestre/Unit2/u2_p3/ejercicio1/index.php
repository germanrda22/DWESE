<?php

//Escribe un script que almacene un array de 8 números enteros:
//a.recorrerá el array y lo mostrará
//b.lo ordenará y lo mostrará
//c.mostrará su longitud
//d.buscará un elemento dentro del array
//e.buscará un elemento dentro del array, pero por el parámetro que llegue a la URL
//Para mostrar los elementos del array en cada uno de los apartados se creará una función llamada mostrarArray().

$arr = array(2, 1, 3, 4, 5, 6, 'hola' => 7, 8);
$par = $_GET['parametro'];
$parc = $_GET['clave'];

//Apartado 1
function mostrararray($array){
    foreach($array as $i){
        echo $i, '<br>';
    }    
}

mostrararray($arr);

echo '<br>';

//Apartado 2

asort($arr);

mostrararray($arr);

echo '<br>';

//Apartado 3

echo count($arr);

echo '<br>';

//Apartado 4

echo $arr[array_search($par, $arr)];

echo '<br>';

//Apartado 5

echo $arr[$parc];

?>