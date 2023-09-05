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
        // MANEIRA DE EXIBIR UMA FUNÇÃO PRIVATE (SCOPO)
            public function mostrarAcao(){
                $this->Andar();
            }
}


class Carro extends Veiculo{

    public function ligar_Limpador(){
        echo "Limpando em 321!";
    }
}

$carro = new Veiculo();
$carro->mostrarAcao();