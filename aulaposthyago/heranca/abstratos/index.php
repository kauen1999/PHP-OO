<?php

    namespace Classes;
    require_once "autoload.php";

    use Classes\Animal;
    use Classes\Carnivoro;
    use Classes\Herbivoro;

    $carnivoro = new Carnivoro("Carne");
    $herbivoro = new Herbivoro("Legumes");

    $carnivoro->habitoAlmentar();
    $herbivoro->habitoAlmentar();

?>