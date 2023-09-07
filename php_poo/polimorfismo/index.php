<?php
//------------------------Poliformismo------------------------

class Animal{
    public function Andar(){
        echo "O animal andou!";
    }
}

class Cavalo extends Animal{
    public function Andar(){ //ou seja o polimorfismo é rescrever um método já existente em uma classe parente
        echo "O cavalo andou!";
    }
}

$animal = new Cavalo();
$animal->Andar();