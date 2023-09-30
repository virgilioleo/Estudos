<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEC</title>
</head>
<body>
    <?php 
        require_once 'lutador.php';
        $l = new lutador ("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        $l->status();
        $l->apresentar();
        $l->ganharLuta();
    ?>
</body>
</html>