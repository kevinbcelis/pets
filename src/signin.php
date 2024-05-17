<?php
    session_start();
    if(isset($_SESSION["id_user"])){
        header("location:home.php");
    }else{
        header("location:signin.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets | Login</title>
    <link rel="icon" type="image/png" href="../src/icons\diseno-de-logo-global-service-express.webp">
</head>

<body>
    <form action="backend/signin.php" method="post">
        <input type="email" name="email" required placeholder="@">
        <input type="password" name="passwd" required placeholder="*****">
        <button>Login</button>
        <a href="signup.html"> create an account</a>
    </form>
</body>

</html>