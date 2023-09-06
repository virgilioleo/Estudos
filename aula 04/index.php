<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 04</title>
</head>
<body>
    <?php 
    require_once 'caneta.php';
    $c1 = new Caneta ("BIC","azul",0.5);
    $c2 = new Caneta ("leoleo","vermelha",2.0,);
    //$c1->setModelo("bic");
    //$c1->modelo = "bic";
    //$c1->setPonta(0.5);
    //print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getponta()}";
    //$c1->setCor("azul");
    var_dump($c1);
    var_dump($c2);
    //print_r($c1);

    ?>
    
</body>
</html>