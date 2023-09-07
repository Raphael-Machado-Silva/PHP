<?php
//------------------------Poliformismo------------------------

class Animal{
    public function Andar(){
        echo "O animal andou!";
    }

    public function Correr(){
        echo "<br>O animal correu!";
    }
}

class Cavalo extends Animal{
    public function Andar(){ //ou seja o polimorfismo é rescrever um método já existente em uma classe parente
        echo "O cavalo andou!";
    }
    public function correr02(){ //tmb é possível referenciar um método já existente dentro de outro
        $this->Correr();
    }
}

$animal = new Cavalo();
$animal->Andar();
$animal->correr02();