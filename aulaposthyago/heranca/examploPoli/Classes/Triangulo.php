<?php

    namespace Classes;
    use Interfaces\ICalculos;

    class Triangulo extends Figura implements ICalculos{
        protected $x;
        protected $y;

        public function mostraArea(){
            echo $this->x*$this->y/2 . "</br>";

        }

    }

?>