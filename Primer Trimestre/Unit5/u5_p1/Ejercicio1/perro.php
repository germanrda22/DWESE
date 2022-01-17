<?php
class Perro
{
    private $tam;
    private $raza;
    private $color;
    private $nombre;

    function __construct($tam, $raza, $color, $nombre)
    {
        $this->tam = $tam;
        $this->raza = $raza;
        $this->color = $color;
        $this->nombre = $nombre;
    }

    public function mostrar()
    {
        return "El perro es de tamaño $this->tam , pertenece a la raza $this->raza, es
         de color $this->color y su nombre es $this->nombre <br>";
    }
    function speak()
    {
        return "Guau!, Guau!";
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getRaza()
    {
        return $this->raza;
    }
    public function getTam()
    {
        return $this->tam;
    }

    public function setNombre($nombre)
    {
        if ((strlen($nombre) <= 21) && (!is_numeric($nombre))) {
            $this->nombre = $nombre;
            return "Nombre actualizado correctamente";
        } else {
            return "El nombre es demasiado largo (>21 caracteres) o tiene contenido numérico";
        }
    }
}

$labrador = new Perro("GRANDE", "LABRADOR", "AMARILLO", "PIRRO");
$caniche = new Perro("PEQUEÑO", "CANICHE", "MARRÓN", "FIRULAIS");

echo $labrador->mostrar(); // Mostramos resultados
echo $caniche->mostrar();