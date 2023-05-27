<?php

    namespace Classes;
    use Interfaces\ICalculos;
    
    class Quadrado extends Figura implements ICalculos{
        protected $x;
        protected $y;

        public function __construct($x=0,$y=0){
            $this->x = $x;
            $this->y = $y;

        }
        public function mostraArea(){
            echo $this->x*$this->y . "</br>";

        }

    }

?>