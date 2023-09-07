<?php

// ------------ CONSTANTES, SELF, PARENT---------------------

class Pessoa{
    const nome = "Raphael";

    public function exibirNome(){
        echo self::nome; //exibir o valor da const usando self
    }
}


class Raphael extends Pessoa {
    const nome = "Machado";
    
    public function exibirNome(){
        echo self::nome; //exibir o valor da const usando self (a constante que está dentro do scopo)
    }
}

$pessoa01 = new Pessoa();
$pessoa01->exibirNome(); //Result: Raphael

$pessoa02 = new Raphael();
$pessoa02->exibirNome(); //Result: Machado