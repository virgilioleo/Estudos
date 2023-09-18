<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Aula</title>
</head>
<body>
    <?php 
    require_once 'caneta.php';
    $cl = new Caneta ("01");
    $cl->modelo = "bic cristal";
    $cl->cor = "azul";
    //$cl->$ponta = "0,5";
    //$cl->carga = "99";
    //$cl->tampada = true;
    $cl->rabiscar();
    $cl->tampar();
    var_dump($cl);
    ?>
    
</body>
</html>