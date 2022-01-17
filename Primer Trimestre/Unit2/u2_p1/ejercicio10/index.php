<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
if (isset($num1, $num2)){
    echo "No se encuentran los parámetros num1 o num2";
    return;
}
if (!is_numeric($_GET['num1']) or !is_numeric($_GET['num2'])){
    echo "num1 y num2 tienen que ser números";
    return;
}
if ($num1 > $num2){
    for ($i = $_GET['num2']; $i < $_GET['num1']; $i ++){
    echo $i;
    }
}else{
    for ($i = $_GET['num1']; $i < $_GET['num2']; $i ++){
    echo $i;
    }
}
