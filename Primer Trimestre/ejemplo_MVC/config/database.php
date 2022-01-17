<?php
    class database{
        public static function conectar(){
            $conexion = new msqli("localhost", "root", "", "notas_ejemplo");
            $conexion->query("SET NAMES 'utf8'");
            if($conexion->connect_error){
                die('Error de conexión');
            }
            return $conexion;
        }
    }
?>