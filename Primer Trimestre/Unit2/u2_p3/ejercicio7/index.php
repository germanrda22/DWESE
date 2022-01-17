<?php
/*Usar foreach para mostrar todos los valores del array $_SERVER en una 
 * tabla con dos columnas. La primera columna debe contener el nombre de la 
 * variable, y la segunda su valor
 */
echo "<table border=1px>";
foreach ($_SERVER as $variable => $valor){
    echo "<tr><td>".$variable."</td>";
    echo "<td>".$valor."</td></tr>";
}
echo "</table>";