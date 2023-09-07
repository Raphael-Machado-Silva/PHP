<?php
//-------------------------------NAMESPACES--------------------------

require 'classes/produto.php';
require 'models/produto.php';


//para evitar conflitos de arquivos com nomes iguais, usa-se os namespaces, ele são declarados pelo REQUIRE e uso das CONTRA BARRAS
$produto = new \classes\Produto(); 
$produto->mostrarDetalhes();

$produto02 = new \models\Produto();
$produto->mostrarDetalhes();


/* também poderia ser chamado destá maneira: user models/Produto
retirando a necessidade da contra barra; 
*/