<?php
//Escribe un script que rellene un array con valores aleatorios (0,1) y lo 
//muestre. A continuación, calcularemos su complementario y también la 
//mostraremos.

$arr = [];
$complementarie = [];
for ($i = 0; $i < 10; $i++) {
   array_push($arr, random_int(0, 1));
}


foreach ($arr as $value) {

   echo $value;
}

echo "<br>";

foreach ($arr as $value) {
   if ($value == 1) {
      array_push($complementarie, 0);
   } else {
      array_push($complementarie, 1);
   }
}

foreach ($complementarie as $value) {

   echo $value;
}