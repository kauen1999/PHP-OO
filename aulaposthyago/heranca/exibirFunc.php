<?php

    require_once "autoload.php";
    
    use Classes\Funcionario;
    use Classes\Gerente;
    use Classes\Programador;

    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $obs = $_POST['obs'];
    $tipo = $_POST['tipo'];

    $funcionario = null;

    if($tipo == "1"){
        $funcionario = new Programador($nome, $salario, $obs);
        echo"Linguagem de Programação adotada:{$funcionario->getLinguagem()}</br>";
    }else{
        $funcionario = new Gerente($nome, $salario, $obs);
        echo "Projeto sob sua responsabilidade: {$funcionario->getProjeto()}<br/>";
    }

    $funcionario->relatoriofunc();





?>