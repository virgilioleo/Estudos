<?php
// Arquivo: index.php

require_once 'usuario.php';

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $usuario = new Usuario();
    $usuario->setNome($nome);
    $usuario->setEmail($email);

    if ($usuario->cadastrar()) {
        $mensagem = 'Usuário cadastrado com sucesso!';
    } else {
        $mensagem = 'Erro ao cadastrar o usuário. Por favor, tente novamente.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>

    <?php if (!empty($mensagem)): ?>
        <p><?php echo $mensagem; ?></p>
    <?php endif; ?>

    <form method="POST" action="index.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
