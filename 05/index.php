<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula POO</title>
</head>
<body>
    <?php 
    require_once 'contabanco.php';
    $p1 = new contabanco (); //Arnaldo
    $p2 = new contabanco (); //Joaquina
    $p1->abrirConta("CC");
    $p1->setDono("Arnaldo");
    $p1->setNumConta(1111);

    $p2->abrirConta("CP");
    $p2->setDono("Joaquina");
    $p2->setNumConta(2222);

    $p1->depositar(300);
    $p2->depositar(500);
    $p2->sacar(1000);

    $p1->mensalidade();
    $p2->mensalidade();

    $p1->sacar(338);
    $p2->sacar(630);

    $p1->fecharConta();
    $p2->fecharConta();
    


var_dump($p1);
var_dump($p2);


    ?>

</body>
</html>