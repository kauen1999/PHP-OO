<?php

$servidor = new PDO("mysql:host=localhost:3307;dbname=livros","root","");

$consulta = $servidor->prepare("INSERT INTO famosos (nome) VALUES(?)");
$nome = 'Neto';
$consulta->bindParam(1,$nome);
$consulta->execute();

$nome = 'Carlos';
$consulta->bindParam(1,$nome);
$consulta->execute();

$servidor=null;


?>