<?php
$fichero = fopen("index.txt", "r");
if($fichero == true){
    while(!feof($fichero)){
        $letra = fgetc($fichero);
        echo $letra."<br>";
    }
}else{
    echo "No existe el archivo";
}
?>