<?php
// Arquivo: Usuario.php

class usuario{
    private $nome;
    private $email;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function cadastrar() {
        // Lógica para salvar o usuário no banco de dados
        // ...

        // Retorne true se o cadastro foi bem-sucedido
        return true;
    }
}
?>