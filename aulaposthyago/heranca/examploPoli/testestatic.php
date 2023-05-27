<?php

    class Aplicacao
    {
        public static $quantInstacias;

        public function __construct(){
            static::$quantInstacias++;
        }

        public function getQuantInstancias() {
            return static::$quantInstacias;

        }

    }

    
    $instancia1 = new Aplicacao();
    echo Aplicacao::$quantInstacias."<br/>";

    $instancia2 = new Aplicacao();
    echo Aplicacao::$quantInstacias."<br/>";
    echo $instancia1->getQuantInstancias();

?>
