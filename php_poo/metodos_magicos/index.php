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



// Sem saber aonde está o valor, apenas o pegando e exibindo
class Dados{
    private $dados = array();

    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }

    public function __get($nome){
        return "O valor do atributo é: ".$this->dados[$nome]."<br>";
    }

    public function __toString()
    { //para imprimir um objeto
        return "Tentei imprimir o objeto";
    }

    public function __invoke(){ //para imprimir algo como função
        return "<br>Objeto como função";
    }
}

$pessoa02 = new Dados();
$pessoa02->nome = "Helena";
$pessoa02->idade = "19";
$pessoa02->sexo = "Feminino";

var_dump($pessoa02);

echo $pessoa02->nome;
echo $pessoa02->idade;
echo $pessoa02->sexo;
echo $pessoa02; //tostring
echo $pessoa02(); //invoke