<?php

    class Crud
    {
        private $servidor;

        public function __construct(){
            $this->servidor = new PDO("mysql:host=localhost:3307;dbname=livros","root","");
        }

        public function Create($nome=""){
            $this->servidor->exec("INSERT INTO famosos (nome) VALUES ('{$nome}')");
           // $this->listar();

        }
        public function listar(){
            $tabela = $this->servidor->query("SELECT * FROM famosos");
    
            if($tabela){
                echo"
                    <table border=2>
                        <tr>
                            <td><b>ID</b></td>
                            <td><b>Nome</b></td>
                        </tr>
                ";
        
                foreach($tabela as $linha){
                    echo "
                        <tr>
                           <td><b>{$linha['id']}</b></td>
                           <td><b>{$linha['nome']}</b></td>
                        </tr>";
                }
                echo "</table>";

        }
    }
    public function delete($id){
        $this->servidor->exec("DELETE from famosos WHERE id = {$id}");
        $this->listar();

    }

    public function edit($id,$nome="Padrão"){
        $this->servidor->exec("update famosos set nome ='{$nome}'
                                 WHERE id = {$id}");
        $this->listar();

    }

        public function __destruct(){
            $this->servidor=null;
        }
    }
?>