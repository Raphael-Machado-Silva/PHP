<?php
//------------------AGREGAÇÃO/RELAÇÃO ENTRE OBJETOS----------------
//Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe utiliza a outra como parte de si própria

class Produto {
    public $nome;
    public $preco;

    function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

class CarrinhoDeCompras {
    public $itens;

    public function adicionarItem(Produto $item) {
        $this->itens[] = $item;
    }

    public function listarItens() {
        foreach ($this->itens as $item) {
            echo "Nome do Produto: " . $item->nome . '<br>';
            echo "Preço: R$" . $item->preco . "<hr>";
        }
    }
}

$produto1 = new Produto("Notebook", 1200);
$produto2 = new Produto("Celular", 1000);

$carrinho = new CarrinhoDeCompras();
$carrinho->adicionarItem($produto1);
$carrinho->adicionarItem($produto2);

$carrinho->listarItens();
