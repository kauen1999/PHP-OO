<?php

    namespace Classes;
    require_once "autoload.php";
    
    use Classes\Figura;
    use Classes\Triangulo;
    use Classes\Quadrado;
    
    //$figura = new Figura(2,2);
    $triangulo = new Triangulo(10,10);
    $quadrado = new Quadrado(10,10);


    $triangulo->mostraArea();
    $quadrado->mostraArea();
?>