<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets | new user</title>
    <link rel="icon" type="image/png" href="../src/icons\diseno-de-logo-global-service-express.webp">
</head>

<body>
    <center>
        <img src="images\thefreeforty_register_icon-icons.com_66338.png" width="100">
    </center>
    <form name="signup-form" action="backend/signup.php" method="post">
        <table border="0" align="center">
            <tr>
                <td> <input type="text" name="fname" placeholder="fullname" required></td>
            </tr>
            <tr>
                <td> <input type="number" name="id" placeholder="1.234.456.789" required></td>
            </tr>
            <tr>
                <td> <input type="email" name="email" placeholder="joe@gmail.com" required></td>
            </tr>
            <tr>
                <td> <input type="password" name="passwd" placeholder="***********" required></td>
            </tr>
            <tr>
                <td> <input type="number" name="id" placeholder="317111111" required></td>
            </tr>
            <tr>
                <td align="center"> <button>register</button> </td>
            </tr>
            <tr>
                <td align="center"> <a href="signin.php"> Go to login </a> </td>
            </tr>
        </table>
    </form>
</body>

</html>