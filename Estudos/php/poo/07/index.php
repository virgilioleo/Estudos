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
        $l = new lutador ("Pretty Boy","França", 31, 1.75, 68.9, 11, 2, 1);
        // $l->setNome("zé da manga");
        // $l->status();
        // $l->apresentar();
        // $l->ganharLuta();

    ?>
    
    
    <?php
        $servername = "localhost";
        $database = "ufc";
        $username = "root";
        $password = "root";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        mysqli_close($conn);
    ?>
</body>
</html>