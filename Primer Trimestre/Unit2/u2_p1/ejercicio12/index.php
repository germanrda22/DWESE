<?php
if (isset($_GET['num1'], $_GET['num2'])){
    for ($i = $_GET['num1']; $i <= $_GET['num2']; $i++){
        if ($i % 2 != 0){
            echo $i .'<br>';
        } 
    }
}