<?php
$arr = [];
for ($i = 0; $i < random_int(20, 30); $i++) {
    $num = random_int(128000, 128060);
    array_push($arr, "&#" . $num);
}

foreach ($arr as $value) { 
    echo $value . " ";
}

echo "<br> Animal a eliminar";

$delete = array_rand($arr, 1);

echo "<br>"; 

echo $arr[$delete];


echo "<br><br>"; 

unset($arr[$delete]); 


$counter = 0; 
foreach ($arr as $value) { 
    $counter++; 
    echo $value . " ";
}

echo "<br>"; // Separador

echo "El array resultante contiene ".$counter." posiciones";