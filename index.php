<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

<?php
    require_once __DIR__ . "/vendor/autoload.php";

    use Dotenv\Dotenv;



    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $nombre = "test desde php";
    require_once __DIR__ . "\conexion.php";
    echo $_ENV["DATABASE"];

?>


    
</body>
</html>