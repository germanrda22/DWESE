<?php
function duplicar($sum){
    return $num * 2;
}

function duplicar2(&$num){
    $num = $num * 2;
}
$numero = 5;
echo 