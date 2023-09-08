<?php
//-------------ASSOCIAÇÃO/RELAÇÃO DE OBJETOS------------
//Acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro

class Pedido{
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente_real = new Cliente();
$cliente_real->nome = "Raphael";
$cliente_real->endereco = "Gaivota";

$pedido= new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente_real; //a chave para entender o código está aqui

    $dados = array(
        "numero"=>$pedido->numero,
        "nome_cliente"=>$pedido->cliente->nome,
        "endereco_cliente"=>$pedido->cliente->endereco
    );

var_dump($dados);