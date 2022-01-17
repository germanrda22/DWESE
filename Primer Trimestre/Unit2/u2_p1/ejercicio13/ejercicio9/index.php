<?php
if (isset($_GET['num1'], $_GET['num2'])){
    echo "No se encuentran los parámetros num1 o num2";
    return;
}
if (!is_numeric($_GET['num1']) or !is_numeric($_GET['num2'])){
    echo "num1 y num2 tienen que ser números";
    return;
}
echo "La suma es ".$_GET['num1'] + $_GET['num2'];
echo "La resta es ".$_GET['num1'] - $_GET['num2'];
echo "La multiplicación es ".$_GET['num1'] * $_GET['num2'];
echo "La división es ".$_GET['num1'] / $_GET['num2'];