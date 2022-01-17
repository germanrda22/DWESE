<?php
// Metodo que comparten las diferentes clases. No quiero que hereden de la misma clase
trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ". $this->nombre ."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class Videojuego{
    public $nombre;
    public $anio;

    use Utilidades;
}

$coche = new Coche();
$coche->nombre="Ferrari LaFerrrari";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre="Antonio Machado";
$persona->mostrarNombre();

$videojuego = new Videojuego();
$videojuego->nombre="Antonio Machado";
$videojuego->mostrarNombre();
?>