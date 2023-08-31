<?php
//--------------------Getters and Setters-----------------------

class Login
{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setsenha($senha);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail()
    { //getters e setters(pelo fato de estar privado e também para ser possível filtrar os dados)
        return $this->email;
    }
    public function setEmail($e)
    {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getsenha()
    { //getters e setters(pelo fato de estar privado)
        return $this->senha;
    }
    public function setsenha($s)
    {
        $this->senha = $s;
    }

    public function Logar()
    {
        if ($this->email == "teste@example.com" and $this->senha == "123456") {
            echo "Login successful";
        } else {
            echo "Login failed";
        }
    }
}

$logar = new Login("teste@example.com", "123456", "Raphael Machado");
//agr os dados são passados destá forma
$logar->setEmail("teste@example.com");
$logar->setsenha(123456);
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
echo $logar->getsenha();
echo $logar->getNome();
