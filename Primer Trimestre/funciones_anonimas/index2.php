<?php
$profesores = [array("NPR" => '5465469', "nombre" => 'Belen', "apellidos" => 
    'Callejón Prieto', "teléfono" => '654648'),
    array("NPR" => '5456454', "nombre" => 'Germán', "apellidos" => 'Sánchez '
        . 'Abad', "teléfono" => '655468'),
    array("NPR" => '6546432', "nombre" => 'María', "apellidos" => 'Granados '
        . 'Fernández', "teléfono" => '564665'),
    array("NPR" => '6546876', "nombre" => 'Paco', "apellidos" => 'Valverde Baz',
        "teléfono" => '6479546')
];

foreach($profesores as $profesor){
    $nrp[]=$profesor['nrp'];
}



/* 
 * Sacar de ese array utilizando funciones anonimas los que tengan apellidos 
 * concretos
 */

