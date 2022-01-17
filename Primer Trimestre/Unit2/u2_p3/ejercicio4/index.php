<?php
//Guarde en un array 20 valores aleatorios entre 0 y 100.
//En un segundo array, llamado cuadrados, deberá almacenar los cuadrados de los 
//valores que hay en el primer array.
//En un tercer array, llamado cubo, se deben almacenar los cubos de los valores 
//que hay en el primer array.
//Por último, se mostrará el contenido de los tres arrays dispuesto en tres 
//columnas paralelas.

$arr = [];
$cuadrados = [];
$cubos = [];

for ($i = 0; $i < 20; $i++) {
   array_push($arr, random_int(0, 100));
}

foreach ($arr as $value){
    array_push($cuadrados, $value ** 2);
}

foreach ($arr as $value){
    array_push($cubos, $value ** 3);
}
echo '<table border=1px color="black">';
echo '<tr>';
echo "<td>Número:</td>";
foreach ($arr as $value){
    echo "<td>".$value."</td>";
}

echo '</tr>';
echo '<tr>';
echo "<td>Cuadrados</td>";

foreach ($cuadrados as $value) {
    echo "<td>".$value."</td>";
}

echo '</tr>';
echo '<tr>';
echo "<td>Cubo:</td>";

foreach ($cubos as $value) {
    echo "<td>".$value."</td>";
}

echo "</tr></table>";