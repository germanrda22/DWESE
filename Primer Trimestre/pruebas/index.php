<?php
 // variables no inicializadas

$var1 = 100;
$var3 = 100 + $var4; // $var4 no existe, se toma como 0
echo "$var3 <br>;"; // muestra 100
$var3 =100 * $var4; // $var4 no existe, se toma como 0
echo "$var3 <br>"; // muestra 0

?>