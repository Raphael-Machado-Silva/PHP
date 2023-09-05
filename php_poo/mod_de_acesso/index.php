<?php 
/*   
PUBLIC - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado é acessível por todos que quiserem acessá-lo...

PROTECTED - visibilidade protected faz com que todos os herdeiros vejam as propriedades protegidos como se fossem públicos...

PRIVATE - ao contrário do public, esse modificador faz com que qualquer método ou propriedade só seja visivel pela classe que a declarou..
*/

class Veiculo{
    public $modelo;
    protected $cor;
    private $ano;

    public function Andar(){
            echo "Andou!";
    }

    public function Parar(){
            echo "Parou!";
    }

            public function setCor($c){
        $this -> cor = $c;
    }
             public function getCor(){
        return $this->cor;
    }

}

class Carro extends Veiculo{
    //para usar herança deve-se usar o EXTENDS, podendo também ter configuranções a mais!
    public function ligarLimpador(){
        echo "Limpando em 3-2-1!";
    }

}

class Moto extends Veiculo{
    public function darGrau(){
        echo "Dar Grau!";
    }
}

//acessando algo public
$veiculo = new Veiculo();
$veiculo-> modelo = "Gol";
echo $veiculo->modelo;

//acessando algo protected (só podendo acessar dentro da classe, usando set e get)
$veiculo_protected = new Veiculo();
$veiculo_protected-> setCor("vermelho");
echo $veiculo_protected->getCor();

//já o private só pode ser acessada e criada totalmente dentro da classe
var_dump($veiculo_protected); //o ano aparece private