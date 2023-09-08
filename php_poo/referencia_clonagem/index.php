<?php

// Referência e Clonagem de objetos

class Pessoa{
    public $idade;

    public function __clone(){ //ativado ao escrever clone lá embaixo
        echo "clonagem de objetos";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa; //pessoa2 faz referencia a pessoa por isso aparece 35 (sem usar o clone),usando o clone ele retorna 25
$pessoa2->idade = 35;

echo $pessoa->idade; //exibi 25

echo $pessoa2->idade; //exibi 35