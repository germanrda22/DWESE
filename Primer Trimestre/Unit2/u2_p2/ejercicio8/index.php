<?php
// Escribe una función que reciba una cadena y comprueba si es una 
// matrícula válida. Tiene que tener siete caracteres, los cuatro 
// primeros números y el resto consonantes mayúsculas.

function validaMatricula($matricula){
    if (strlen($matricula) != 7){
        echo "Matricula no válida";
    } else {
        for ($i = 0, $j = 4; $i < 4, $j < 7; $i++, $j++){
            if (!is_numeric($matricula[$i]) or !is_string($matricula[$j])){
                echo "Matricula no válida";
            }
            if (!preg_match('`[a,e,i,o,u]`', $matricula[$j]) or !preg_match('`[A,E,I,O,U]`', $matricula[$j])){
                echo "Matricula no válida";
            }
        }
    }
    echo "Matricula válida";
}


validaMatricula($_GET['matricula']);