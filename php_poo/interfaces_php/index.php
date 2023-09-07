<?php
//-------------------------------INTERFACE--------------------------------


//ao invés de CLASS usa-se interface
interface Crud{
    public function create($data); //elas podem ter lógica dentro das {}, mas optei por n criar lógica
    public function read();
    public function update();
    public function delete();
}

//ao invés de usar EXTENDS usa-se IMPLEMENTS, pois interface é um modelo, obs: a class que usar a interface precisa ter os msm métodos que a interface
class Noticias implements Crud{

    public function create($data){
        //lógica para criar uma noticia
    }
    public function update(){
        //lógica para atualizar uma noticia
    }
    public function delete(){
        //lógica para deletar uma noticia
    }
    public function read(){
        //logica para ler uma noticia
    }
}