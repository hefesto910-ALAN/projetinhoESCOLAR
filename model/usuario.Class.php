<?php
class usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $tipo;
    
    public function __construct($nome, $email, $senha, $tipo) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->tipo = $tipo;
    }
}
?>
