<?php
    require_once 'autoload.php';

    if(isset($_GET['controller'])){
        $nombre_controlador = $_GET['controller'].'Controller';//al llamarse igual acortamos la URL añadiendolo directamente
    }else{
        echo "La página que buscas no existe";
        exit();
    }

    if(class_exists(($nombre_controlador))){
        $controlador = new $nombre_controlador();
        if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
            $action = $_GET['action'];
            $controlador->$action();
        }else{
            echo "La página que buscas no existe";
        }
    }else{
        echo "La página que buscas no existe";
    }
    
?>