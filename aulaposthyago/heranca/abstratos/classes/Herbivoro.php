<?php
    namespace Classes;

    class Herbivoro extends Animal{

        public function habitoAlmentar(){
            echo"
                Come:{$this->getCome()}</br>
            ";
        }



    }


?>