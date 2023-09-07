<?php
//-------------------------------NAMESPACES--------------------------

require 'classes/produto.php';
require 'models/produto.php';

$produto = new \classes\Produto(); //para evitar conflitos de arquivos com nomes iguais, usa-se os namespaces
$produto->mostrarDetalhes();

$produto02 = new \models\Produto();
$produto->mostrarDetalhes();