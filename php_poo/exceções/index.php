<?php
//------------------------TRATAMENTO DE EXCEÇÕES--------------------------

//Ocorrência anormal que afeta o funcionamento da aplicação
//Exception é a classe base para todas as Exceptions
//message, code, file, line

class Newsletter{
    public function cadastrarEmail($email){

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Error", 1);
        }
            
        else{
            echo "Email cadastrado";
        }
    }
}

$newsletter = new Newsletter();

try{ //tratando a exceção para não dar erro
$newsletter->cadastrarEmail("contato@");
} catch(Exception $e){
    echo "Mensagem: " . $e->getMessage();
    echo "<br>Código: " . $e->getCode();
    echo "<br>Linha: " . $e->getLine();
    echo "<br>Arquivo: " . $e->getFile();
}