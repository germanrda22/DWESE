<?php
    require_once 'config/database.php';
    class ModeloBase{
        public $db; //aqui guardo la conexión

        public function __construct()
        {
            $this->db = database::conectar();
        }
        public function conseguir_todos($tabla){
            $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
        }
    }
?>