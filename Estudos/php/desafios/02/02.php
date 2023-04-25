<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
        $numero_aleatorio = mt_rand(1, 100);
        echo "<p>Gerando um número aleatório de 0 a 100...</p>";
        echo "<p>O número aleatório é $numero_aleatorio</p>";        
        ?>
        <button><a href="javascript:history.back()">Voltar</a></button>
        <button onclick="javasript:document.location.reload()">Gerar outro</button>
        <form action="02.php" method="get">
        <input type="submit" value="Gerar Novamente">
    </main>
    
</body>
</html>