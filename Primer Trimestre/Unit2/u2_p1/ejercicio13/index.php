<?php
$num1 = rand(1, 6);
$num2 = rand(1, 6);
if ($num1 < $num2){
    echo "El número mayor es ".$num2;
}elseif ($num2 < $num1){
    echo "El número mayor es ".$num1;
}else{
    echo "Son iguales";
}