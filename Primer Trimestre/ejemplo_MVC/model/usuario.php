<?php
require_once 'modeloBase.php';
class Usuario extends ModeloBase{
    public function __construct(private string $nombre,
                                private string $apellido1,
                                private string $apellido2,
                                private string $correo,
                                private string $email)
    {}
    public function getNombre(): string{
        return $this -> nombre;
    }
    public function getApellido1(): string{
        return $this -> apellido1;
    }
    public function getApellido2(): string{
        return $this -> apellido2;
    }
    public function getCorreo(): string{
        return $this -> correo;
    }
    public function getEmail(): string{
        return $this -> email;
    }
    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }
    public function setApellido1($apellido1){
        $this -> apellido1 = $apellido1;
    }
    public function setApellido2($apellido2){
        $this -> apellido2 = $apellido2;
    }
    public function setCorreo($correo){
        $this -> correo = $correo;
    }
    public function setEmail($email){
        $this -> email = $email;
    }
    public function conseguirTodos(){
        return "Sacamos todos los usuarios";
    }
}

?>