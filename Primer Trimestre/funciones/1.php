<?php
// Ejemplos de funciones definidas por el usuario

// Ejemplo 1: sin parámetros

function Muestranombres(){
    echo "Maria <br/>";
    echo "Marcos <br/>";
    echo "Marta <br/>";
}
Muestranombres();

// Ejemplo 2: con parámetro
// Genera la tabla de multiplicar del número que paso por parámetro

function tablaMultiplicar($sum){
    echo "<h3> Tabla de multiplicaar del número $num <h3/>";
    for ($i = 1; $i <= 10; $i++){
        $multiplicacion = $sum * $i;
        echo "$num x $i = $multiplicacion<br/>";
    }
}

tablaMultiplicar(8);

// Ejemplo 3: La tabla de multiplicar de un número que nos llega por URL
if (isset($_GET['numero'])){
    tablaMultiplicar($_GET['numero']);
}else{
    echo "No hay número para mostrar su tabla";
}

// Ejemplo 4:imprimir todas las tablas del 1 al 10
for ($i = 1; $i <= 10; $i++){
    tablaMultiplicar($i);
}

// Ejemplo 5: con varios parámetros

function calculadora(){
    
}

// Ejemplo 6: saludo
function saludar($nombre = 'Pedro'){
    echo "Hola $nombre <br>";
}
saludar();
saludar("Andrea");