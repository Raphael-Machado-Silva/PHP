<?php
//------------------MÉTODOS MÁGICOS---------------------
//clone
//construct
//invoke
//tostring
//get
//set

class Pessoa{
    private $nome;

    public function __set($nome, $valor){
        $this->nome = $valor;
    }

    public function __get($nome){
        return "O valor do atributo é: ".$this->$nome."<br>";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Raphael";

var_dump($pessoa);
echo $pessoa->nome;
