<?php
interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordenador{
    private $modelo;

    function getModelo(){
        return $this->modelo;
    }

    function setModelo($modelo){
        $this->modelo = $modelo;
    }

    function encender()
    {
        return "ENCENDIDO";
    }

    function apagar()
    {
        return "APAGADO";
    }

    function reiniciar()
    {
        return "REINICIADO";
    }

    function desfragmentar()
    {
        return "DESFRAGMENTADO";
    }

    function detectarUSB()
    {
        return "DETECTADO USB";
    }
}

class Portatil implements Ordenador{
    private $sistemaOperativo;

    function getSO(){
        return $this->sistemaOperativo;
    }

    function setSO($sistemaOperativo){
        $this->sistemaOperativo = $sistemaOperativo;
    }

    public function encender()
    {
        return "Encendido rápido";
    }

    public function apagar()
    {
        return "Apagado";
    }

    public function reiniciar()
    {
        return "Reinicio de SO";
    }

    public function desfragmentar()
    {
        return "Desfragmentar disco";
    }

    public function detectarUSB()
    {
        return "Se ha detectado un USB 3.0";
    }
}
$maquintos = new iMac();
$maquintos->setModelo('Mackbook PRO 2019');
?>