<?php

    require_once "autoload.php";
    
    use Classes\Veiculo;
     
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tipo = $_POST['tipo'];
    $veiculo;

    if($tipo == "1"){
        $veiculo = new Veiculo($nome,$marca,$modelo);
        echo "Nome:{$veiculo->getNome()}</br>";
        echo "Marca:{$veiculo->getMarca()}</br>";
        echo "Modelo:{$veiculo->getModelo()}</br>";
        echo "Tipo:Moto</br>";
    }else{
        $veiculo = new Veiculo($nome,$marca,$modelo);
        echo "Nome:{$veiculo->getNome()}</br>";
        echo "Marca:{$veiculo->getMarca()}</br>";
        echo "Modelo:{$veiculo->getModelo()}</br>";
        echo "Tipo:Carro</br>";
    }

  
?>