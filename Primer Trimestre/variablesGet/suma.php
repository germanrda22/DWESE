<?php
if (empty($_GET['num1']) or empty($_GET['num2'])){
    echo "No se encuentran los parámetros num1 o num2";
    return;
}
if (!is_numeric($_GET['num1']) or !is_numeric($_GET['num2'])){
    echo "num1 y num2 tienen que ser números";
    return;
}
echo $_GET['num1'] + $_GET['num2'];