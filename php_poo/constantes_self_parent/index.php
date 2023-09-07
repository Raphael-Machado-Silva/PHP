<?php

// ------------ CONSTANTES, SELF, PARENT---------------------

class Pessoa{
    const nome = "Raphael";

    public function exibirNome(){
        echo self::nome; //exibir o valor da const usando self (preferência a constante que está dentro do scopo)
    }
}


class Raphael extends Pessoa {
    const nome = "Machado";
    
    public function exibirNome(){
        echo parent::nome; //exibir o valor da const usando parent (neste caso ele pegara o valor do pai)
    }
}

$pessoa01 = new Pessoa();
$pessoa01->exibirNome(); //Result: Raphael

$pessoa02 = new Raphael();
$pessoa02->exibirNome(); //Result: Machado