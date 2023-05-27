<?php

    class Produto 
    {
        private $codigo;
        private $descricao;
        private $preco;
        private $quantidade;

        public function __construct($codigo ="Não Informado", $descricao, $preco, $quantidade) {
            $this->codigo = $codigo;
            $this->descricao = $descricao;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
            
        }

        public function imprimeRelatorio() {
            echo "<p><b>Código: {$this->codigo}</b></p>";
            echo "<p><b>Descrição: {$this->descricao}</b></p>";
            echo "<p><b>Preço: {$this->preco}</b></p>";
            echo "<p><b>Quantidade: {$this->quantidade}</b></p>";

        }

        public function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        
        public function getCodigo() {
            return $this->codigo;
        }

        /**
         * Get the value of descricao
         */ 
        public function getDescricao()
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         *
         * @return  self
         */ 
        public function setDescricao($descricao)
        {
                $this->descricao = $descricao;

                return $this;
        }

        /**
         * Get the value of preco
         */ 
        public function getPreco()
        {
                return $this->preco;
        }

        /**
         * Set the value of preco
         *
         * @return  self
         */ 
        public function setPreco($preco)
        {
                $this->preco = $preco;

                return $this;
        }

        /**
         * Get the value of quantidade
         */ 
        public function getQuantidade()
        {
                return $this->quantidade;
        }

        /**
         * Set the value of quantidade
         *
         * @return  self
         */ 
        public function setQuantidade($quantidade)
        {
                $this->quantidade = $quantidade;

                return $this;
        }

        public function __destruct(){
            echo "<h1>Vlw Flw</h1>";

        }



    }

?>