<?php


    namespace Classes;


    class Funcionario{
        protected $nome;
        protected $salario;

        public function __construct($nome="", $salario=0){
            $this->nome = $nome;
            $this->salario = $salario;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of salario
         */ 
        public function getSalario()
        {
                return $this->salario;
        }

        /**
         * Set the value of salario
         *
         * @return  self
         */ 
        public function setSalario($salario)
        {
                $this->salario = $salario;

                return $this;
        }

        public function relatoriofunc(){
            echo"
                Nome: {$this->getNome()}<br/>
                Salario: {$this->getSalario()}<br/>
            ";
        }

    }




?>