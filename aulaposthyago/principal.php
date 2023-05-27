<?php
    require_once "Produto.php";
    
    $produto = new Produto($codigo,"Let's go back",7.20,50);

//    $produto->setCodigo(12);
//    $produto->setDescricao("Let's go back");
//    $produto->setPreco(7.20);
//    $produto->setQuantidade(50);
    
    $produto->imprimeRelatorio();




?>