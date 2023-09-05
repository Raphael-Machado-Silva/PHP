<?php

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

        private function Andar(){
            echo "Andou!!";
        }
        public function Parar (){
            echo "Parou!!";
        }
}


class Carro extends Veiculo{

    public function ligar_Limpador(){
        echo "Limpando em 321!";
    }
}

$carro = new Veiculo();
$carro->Andar();