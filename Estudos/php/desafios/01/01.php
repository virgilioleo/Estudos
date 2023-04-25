<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anterior e Posterior</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
        $num = $_GET ["numero"];
        $antecessor = $num - 1;
        $sucessor = $num + 1;
        echo "<p>O número escolhido foi <strong>$num</strong></p>";
        echo "<p>O <em>antecessor</em> é $antecessor</p>";
        echo "<p>O <em>sucessor</em> é " . $sucessor . " </p>";
        ?>
        <button><a href="javascript:history.back()">Voltar</a></button>
    </main>
    
</body>
</html>