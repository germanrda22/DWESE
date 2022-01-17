<?php
    class NotaController{
        public function listar(){
            //Modelo
            require_once 'model/nota.php';

            //Logica accion del controlador
            $nota = new Nota();
            $notas = $nota->conseguir_todos('notas');

            //Vista
            require_once 'view/nota/listar.php';
        }
    }
?>