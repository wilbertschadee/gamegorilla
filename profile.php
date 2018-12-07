<?php

    session_start();

    include "php/dbConnection.php";

    $profile = $_GET['user_id'];

    $sql = "SELECT * FROM users WHERE user_id = '$profile'";

    $data = $conn->query($sql); 

    include "nav.php";

    foreach ($data as $row){

        echo '<div class="wrapper">
        <div class="cat">MIJN ACCOUNT</div>
        <div class="welcome">Welkom <span>' . $_SESSION['firstname'] . '</span></div>
        <div class="info">
        <h1>' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . '</h1>
        <h2>Persoonlijke gegevens:</h2>
        &nbsp;&nbsp;' . $_SESSION['birthday'] . '<br>
        &nbsp;&nbsp;' . $_SESSION['username'] . '<br>
        &nbsp;&nbsp;<a href="changeForm.php">Wijzig persoonlijke gegevens</a>
        </div>';
    }
    ?>
        <?php  if(isset($_SESSION["loggedin"])){
                if($_SESSION['role'] == 2){
                    echo '<div class="products">';
                    include "php/showorder.php";
                    echo '</div>';
                }
            } ?>        
        
        <div class="orders">
            <h1 class="lines"><span>Mijn bestellingen:</span></h1>
            <div class="products">
                <?php include "php/orders.php" ?>
            </div>
        </div>
        <div class="wishList">
            <h1 class="lines"><span>Mijn wishlist:</span></h1>
            <div class="products">
                <?php include "php/wishList.php" ?>
            </div>
        </div>
    </div>