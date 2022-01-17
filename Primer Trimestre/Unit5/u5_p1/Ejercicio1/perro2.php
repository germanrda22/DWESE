<?php
class Perro{
    function __construct(
        private string $tam,
        private string $raza,
        private string $color,
        private string $nombre)
    {
        $this->tam = $tam;
        $this->raza = $raza;
        $this->color = $color;
        $this->nombre = $nombre;
    }

    function mostrar_propiedades(){
        return "El perro es de tamaño $this->tam , pertenece a la raza $this->raza, es
         de color $this->color y su nombre es $this->nombre";
    }
    function speak(){
        return "Guau!, Guau!";
    }
}

$labrador = new Perro("GRANDE", "LABRADOR", "AMARILLO", "PIRRO");
$caniche = new Perro("PEQUEÑO", "CANICHE", "MARRÓN", "FIRULAIS");
?>