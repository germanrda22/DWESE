<?php
    if(isset($_COOKIE['micookie'])){
        echo "<h1>".$_COOKIE['micookie']."</h1>";
    }else{
        echo "No existe la cookie";
    }
    if(isset($_COOKIE['ayear'])){
        echo "<h1>".$_COOKIE['ayear']."</h1>";
    }else{
        echo "No existe la cookie";
    }
?>
