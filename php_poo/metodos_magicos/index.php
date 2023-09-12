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


// Sem saber aonde está o valor 

class Dados{
    private $dados = array();

    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }

    public function __get($nome){
        return "O valor do atributo é: ".$this->dados[$nome]."<br>";
    }
}

$pessoa02 = new Dados();
$pessoa02->nome = "Helena";

var_dump($pessoa02);
echo $pessoa02->nome;