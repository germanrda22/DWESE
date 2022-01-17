<?php
echo '<table border="1px" text-align="center">';
echo '<tr>';
for ($tabla = 1; $tabla <= 10; $tabla++){
    echo "<td>Tabla del $tabla </td>";
}
echo '</tr>';

for ($num = 0; $num <= 10; $num++){
    echo '<tr>';
    for ($mult = 1; $mult <= 10; $mult++){
        
        echo "<td> $num x $mult = " .$num*$mult. " </td>";
        
    }
    echo '</tr>';
}
echo '</table>';