<?php
    /*$var = 3;
    if($var < 0){
        echo "Es menor que cero";
    } else {
        echo "Es mayor o igual que cero";
    }*/
?>

<?php
    /*$var = 3;
    if($var == 1){
        echo "Es un uno";
    }elseif($var == 2){
        echo "Es un dos";
    }elseif($var == 3){
        echo "Es un tres";
    }else{
        echo "No es ni uno, ni dos, ni tres";
    }*/
?>

<?php
    /*$i = 0;
    while($i < 5){
        echo "$i <br>";
        $i++;
        if ($i == 3){
            break;
        }
    }*/
?>

<?php
    $i = 0;
    echo "Primer switch anidado: <br>";
    while ($i < 2){
        switch ($i){
            case 0:
                echo "Es un cero <br>";
                break;
            case 1:
                echo "Es un uno <br>";
                break;
        }
        $i++;
    }
    $i = 0;
    echo "Segundo switch anidado: <br>";
    while ($i < 2){
        switch ($i){
            case 0:
                echo "Es un cero <br>";
                break 2;
            case 1:
                echo "Es un uno <br>";
                break;
        }
        $i++;
    }
?>