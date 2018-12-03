<?php  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/display.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/profile.css">

</head>
<body>
  
    <div class="navWrapper">    
        <div class="navLogo">
            <a href="index.php"><img src="img/gameGorilla.png" alt=""></a>
        </div>
        <div class="navLink">
            <a href="games.php">GAMES</a>
            <a href="console.php">CONSOLES</a>
            <a href="accessoires.php">ACCESSOIRES</a>
        </div >

        <div class="navLogin">
            <?php 
            if(isset($_SESSION["loggedin"])){
                echo'<!--<a href="">MANDJE</a>-->
                    <a href="profile.php?user_id=' . $_SESSION['userid'] . '">MIJN ACCOUNT</a>
                    <a href="php/logout.php">LOG OUT</a>';
            } else {
                echo'<a href="login.php">LOGIN</a>';
            }
            ?>

        </div>
    </div>

