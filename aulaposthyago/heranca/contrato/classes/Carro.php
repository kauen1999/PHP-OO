<?php
    namespace Classes;
    use Interfaces\ICarateristicas;
class Carro extends Veiculo implements ICarateristicas{

    public function exibeNome(){
        echo "
            Nome: {$this->getNome()} .<br/>
            ";
            }

    public function exibeMarca(){
        echo "
            Marca: {$this->getMarca()} .<br/>
            ";

    }
    public function exibeModelo(){
        echo "
        Modelo: {$this->getModelo()} .<br/>
        ";

    }

}


?>