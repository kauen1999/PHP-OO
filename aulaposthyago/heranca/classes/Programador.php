<?php

    namespace Classes;

    class Programador extends Funcionario {
        private $linguagem;


        public function __construct($nome, $salario, $linguagem){
            parent::__construct($nome, $salario);
            $this->linguagem = $linguagem;

        }


        /**
         * Get the value of linguagem
         */ 
        public function getlinguagem()
        {
                return $this->linguagem;
        }

        /**
         * Set the value of linguagem
         *
         * @return  self
         */ 
        public function setlinguagem($linguagem)
        {
                $this->linguagem = $linguagem;

                return $this;
        }
    }



?>