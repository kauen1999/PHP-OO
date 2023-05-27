<?php

    namespace Classes;
class Carnivoro extends Animal{

    public function habitoAlmentar(){
        echo "Come:{$this->getCome()}</br>";
    }


}

?>