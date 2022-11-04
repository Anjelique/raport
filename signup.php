<?php
session_start();
if (isset($_SESSION['id'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="http://http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Raportare DJEP Arad</title>
</head>

<body>
    <div class="header">
        <h1>Raportare Starea Civila</h1>
        <div id="my_menu" align="right">
            <a href="index.php"> HOME</a> |
            <?php
            if (!isset($_SESSION['id'])) {
                echo '<a href="signup.php">SIGN UP</a>';
            }
            ?>
        </div>
        <div class="login">
            <h1>Creaza cont</h1>
            <form method="POST" action="includes/signup.inc.php">
                <input type="text" name="nume" placeholder="Nume"><br>
                <input type="text" name="prenume" placeholder="Prenume"><br>
                <input type="text" name="username" placeholder="Utilizator"><br>
                <input type="password" name="password" placeholder="Parola"><br>
                <input type="submit" value="Sign Up">
            </form>
            <?php
            if (isset($_GET['info']) && $_GET['info'] == 'ok') {
                echo '<p style="text-align: center; color: green; font-size: 20px;">Contul a fost creat cu succes!</p>';
            } else if (isset($_GET['info']) && $_GET['info'] == 'eroare') {
                echo '<p style="text-align: center; color: red; font-size: 20px;">A apărut o eroare! Contactați administratorul DJEP Arad</p>';
            } else if (isset($_GET['info']) && $_GET['info'] == 'exista') {
                echo '<p style="text-align: center; color: red; font-size: 20px;">A apărut o eroare! Contul cu acest utilizator există deja!</p>';
            }
            ?>

        </div>

</body>

</html>