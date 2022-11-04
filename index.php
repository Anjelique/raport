<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="http://http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Raportare DJEP Arad</title>
</head>

<body>
    <div class="header">

        <h1>Raportare Starea Civila</h1>

        <?php
        /*if (!isset($_SESSION['id'])) {
            echo '
                <div id="my_menu" align="right">
                    <a href="index.php"> HOME</a> | <a href="signup.php">SIGN UP</a> 
                </div>
                ';
        }*/
        ?>

        <?php
        if (!isset($_SESSION['id'])) {
            echo
            '
            <div class="login">
                    <form method="POST" action="includes/login.inc.php">
                        <input type="text" name="username" placeholder="Utilizator"><br>
                        <input type="password" name="password" placeholder="Parola"><br>
                        <input type="submit" value="Log in">
                    </form>
              
            </div>
            ';
        } else {
            header("Location: anexe.php");
        }
        ?>
</body>

</html>