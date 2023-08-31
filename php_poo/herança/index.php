<?php 
//--------------------Herança é um recurso que permite que classes compartilhem atributos e métodos, reaproveitando assim códigos----------------------

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
            echo "Andou!";
    }

    public function Parar(){
            echo "Parou!";
    }
}

class Carro extends Veiculo{
    //para usar herança deve-se usar o EXTENDS, podendo também ter configuranções a mais!
    public function ligarLimpador(){
        echo "Limpando em 3-2-1!";
    }

}

class Moto extends Veiculo{
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 1990;
$carro->Andar();
$carro->Parar();
$carro->ligarLimpador();
var_dump($carro);


$moto = new Moto();
$moto->modelo = "FAN-160";
$moto->cor = "Preto";
$moto->ano = 2021;
$moto->Andar();
$moto->Parar();
var_dump($moto);