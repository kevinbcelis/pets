<?php
    session_start();
    if(!isset($_SESSION["id_user"])){
        header("refresh")
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets | Home</title>
    <link rel="icon" type="image/png" href="../src/icons\diseno-de-logo-global-service-express.webp">
</head>
<body>
    <a href = "../index.html"> exit
</body> 
</html>