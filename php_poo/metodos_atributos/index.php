<?php

// ----------------------Métodos e Atributos Estáticos----------------------

class Login{
    public static $user; //criou atributo

    public static function verificaLogin(){ //criou método
            echo "O usuário ". self::$user." está logado!";
    }
}

Login::$user = "admin";
Login::verificaLogin(); // não é necessário instanciar a classe login -> $login = new Login();