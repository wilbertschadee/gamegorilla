<?php

    session_start();

    include "php/dbConnection.php";

    $profile = $_GET['user_id'];

    $sql = "SELECT * FROM users WHERE user_id = '$profile'";

    $data = $conn->query($sql); 

    include "nav.php";

    foreach ($data as $row){

        $htmlOutput  ="";
        $htmlOutput  ='<div class="wrapper">';
        $htmlOutput .='<div class="cat">MIJN ACCOUNT</div>';
        $htmlOutput .='<div class="welcome">Welkom <span>' . $_SESSION['firstname'] . '</span></div>';
        $htmlOutput .='<div class="info">';
        $htmlOutput .='<h1>' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . '</h1>';
        $htmlOutput .='<h2>Persoonlijke gegevens:</h2>';
        $htmlOutput .='&nbsp;&nbsp;' . $_SESSION['birthday'] . '<br>';
        $htmlOutput .='&nbsp;&nbsp;' . $_SESSION['username'] . '<br>';
        $htmlOutput .='&nbsp;&nbsp;<a href="changeForm.php">Wijzig persoonlijke gegevens</a>';
        $htmlOutput .='</div>';

        echo $htmlOutput;
    }
?>

            <div class="orders">
                <h1 class="lines"><span>Mijn bestellingen:</span></h1>
                <?php include "php/orders.php" ?>
            </div>
            <div class="wishList">
                <h1 class="lines"><span>Mijn wishlist:</span></h1>
                <div class="products">
                <?php include "php/wishList.php" ?>
                </div>
            </div>
        </div>
    </body>
</html>