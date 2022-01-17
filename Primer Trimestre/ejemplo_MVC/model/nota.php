<?php
    require_once 'modeloBase.php';

    class Nota extends ModeloBase{
        public $usuario_id;
        public $titulo;
        public $descripcion;

        public function __construct()
        {
            parent::__construct();
        }

        function getUsuario_id(){
            return $this->usuario_id;
        }

        function getTitulo(){
            return $this->titulo;
        }

        function setDescriocion($descripcion){
            $this->descripcion = $descripcion;
        }

        
    }
?>