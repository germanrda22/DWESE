<?php
// Escribe una función que reciba una cadena y comprueba si es una contraseña válida. Hay que comprobar que tenga: 
// Entre 6 y 15 caracteres.
// Al menos un número. 
// Al menos una letra mayúscula. 
// Al menos una letra minúscula. 
// Al menos un carácter no alfanumérico
function validar_clave($clave){
    if(strlen($clave) < 6){
        echo "La clave debe tener al menos 6 caracteres";
        return false;
    }
    if(strlen($clave) > 16){
        echo "La clave no puede tener más de 16 caracteres";
        return false;
    }
    if (!preg_match('`[a-z]`',$clave)){ 
        echo "La clave debe tener al menos una letra minúscula";
        return false;
    }
    if (!preg_match('`[A-Z]`',$clave)){ 
        echo "La clave debe tener al menos una letra mayúscula";
        return false;
    }
    if (!preg_match('`[0-9]`',$clave)){ 
        echo "La clave debe tener al menos un caracter numérico";
        return false;
    }
    echo "Clave valida";
    return true;
}

validar_clave($_GET['clave']);