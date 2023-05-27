<?php

      namespace Classes;
      
    abstract class Figura{

        protected $x;
        protected $y;
        const TESTE = "test";
        

        public function __construct($x=0,$y=0){
            $this->x = $x;
            $this->y = $y;

        }

     

    }

?>