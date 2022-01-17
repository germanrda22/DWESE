<?php
function buenasDias(){
    return "Hola, buenos días";
}

function buenasTardes(){
    return "Hola, buenas tardes";
}

function buenasNoches(){
    return "¿Te vas a dormir? Buenas novhes";
}

$horario = "Noches";
$mifuncion = "buenas".$horario;
echo $mifuncion;
echo "<br>";
$horario = "Dias";
$mifuncion = "buenas".$horario;
echo $mifuncion;
echo "<br>";
$horario = "Tardes";
$mifuncion = "buenas".$horario;
echo $mifuncion;
echo "<br>";

$horario = $_GET['horario'];
echo mifuncion();

