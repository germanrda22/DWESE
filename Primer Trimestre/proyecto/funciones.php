<?php

function conseguirEntradas($conexion){
    $entradas = mysqli_query($conexion, 'SELECT * FROM entradas');
    return $entradas;
}


function seleccionarUsuario($conexion, $email){
    $sql = ("SELECT id FROM usuarios where email = '$email'");
    $usuario = mysqli_query($conexion, $sql);
    return $usuario;
}

function conseguirCategorias($conexion){
    $resultado = mysqli_query($conexion, 'SELECT * FROM categorias');
    return $resultado;
}

?>
