<?php
abstract class Ordenador{
    public $encendido;

    abstract public function encender();

    public function apagar(){
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador{
    public $software;

    public function arrancarSoftware(){
        $this->software = true;
    }

    public function encender()
    {
        $this->encendido = true;
    }
}
$ordenador = new PcAsus();
var_dump($ordenador);
$ordenador->arrancarSoftware();
$ordenador->encender();
var_dump($ordenador);
$ordenador->apagar();
var_dump($ordenador);
?>