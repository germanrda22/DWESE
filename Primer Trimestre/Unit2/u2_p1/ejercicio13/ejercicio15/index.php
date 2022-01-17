<?php

echo '<table border="1px" text-align="center">';
echo '<tr>';
echo "<td>Decimal</td>";
echo "<td>Binario</td>";
echo "<td>Octal</td>";
echo "<td>Hexadecimal</td>";
echo '</tr>';

for ($num = 0; $num <= 20; $num++){
    echo "<tr>";
    $bin = decbin($num);
    $oct = decoct($num);
    $hex = dechex($num);
    echo "<td>$num</td>";
    echo "<td>$bin</td>";
    echo "<td>$oct</td>";
    echo "<td>$hex</td>";
    echo "</tr>";
}
echo "</table>";