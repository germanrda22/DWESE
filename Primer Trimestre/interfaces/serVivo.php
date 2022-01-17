<?php
abstract class SerVivo{
  public $vivo;
  
  abstract public function nacer();

  public function morir(){
      $this->vivo = false;
  }

  public function crecer(){

  }

  public function reporducir(){

  }
}

/*class Perro extends SerVivo{
    
}*/


?>