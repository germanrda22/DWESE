<?php
// Función que nos devuelve la fecha de hoy en castellano
setlocale(LC_ALL,"es_ES");
function fecha(){
    return date("d.M.Y");
}
echo fecha();