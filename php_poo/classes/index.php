<?php 
//----------------- CLASSES, ATRIBUTOS E MÉTODOS------------------
class Pessoa{
    public $nome;
    public $idade;

    public function Falar(){ //precisa usar this
        echo $this->nome . " de " . $this->idade . " acabou de falar.";
    }
}

$raphael = new Pessoa();
$raphael->nome = "Raphael Machado Silva";
$raphael->idade = 18;
$raphael->Falar(); 


 /*EXIBINDO VALORES DE MANEIRA EXTERNA
$raphael->Falar();
echo $raphael->nome;
echo $raphael->idade;
*/
?>