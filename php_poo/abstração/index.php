<?php
//-----------------------ABSTRAÇÃO-----------------------------

abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

        public function setSaldo($s){
            $this->saldo = $s;
        }
        public function getSaldo(){
            return $this->saldo;
        }

    abstract protected function Sacar();
    abstract protected function Depositar();
}

class Itau extends Banco{
    public function Sacar(){
        echo "Sacou!";
    }
    public function Depositar(){
        echo "Depositou!";
    }
}


$itau = new Itau();