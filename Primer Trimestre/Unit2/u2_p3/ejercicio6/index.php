<?php
// Escriba un script que cree un array con 15 números aleatorios y los 
// muestre en pantalla. 
//A continuación, rotará los elementos de ese array una posición. Es decir, 
//el elemento de la posición 0 debe pasar a la posición 1, el de al 1 a la 2,
// …, el elemento de la última posición pasará a la posición 0. 
//Por último, mostrará el nuevo contenido del array.
	
    $nums = [];

    for ($i=0; $i < 15; $i++) { 
            array_push($nums,rand(0,100));
    };
    foreach ($nums as $number) {
            if ($number == $nums[count($nums)-1]) {
                    echo $number;
            }else{
                    echo $number.', ';
            };
    };
    echo "<br>";
    $last = array_pop($nums);

    array_unshift($nums, $last);

    foreach ($nums as $number) {
            if ($number == $nums[count($nums)-1]) {
                    echo $number;
            }else{
                    echo $number.', ';
            };
    }
?>