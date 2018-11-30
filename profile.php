<?php

    include "php/dbConnection.php";

    $profile = $_GET['user_id'];

    $sql = "SELECT * FROM users WHERE user_id = '$profile'";

    $data = $conn->query($sql); 

    include "nav.php";

    foreach ($data as $row){

        $htmlOutput  ="";
        $htmlOutput  ='<div class="wrapper">';
        $htmlOutput .='<div class="cat">MIJN ACCOUNT</div>';
        $htmlOutput .='<div class="welcome">Welkom <span>' . $row['fname'] . '</span></div>';
        $htmlOutput .='<div class="info">';
        $htmlOutput .='<h1>' . $row['fname'] . ' ' . $row['lname'] . '</h1>';
        $htmlOutput .='<h2>Persoonlijke gegevens:</h2>';
        $htmlOutput .='&nbsp;&nbsp;' . $row['birthdate'] . '<br>';
        $htmlOutput .='&nbsp;&nbsp;' . $row['email'] . '<br>';
        $htmlOutput .='&nbsp;&nbsp; <a href="">Wijzig persoonlijke gegevens</a>';
        $htmlOutput .='</div>';
        $htmlOutput .='<div class="orders">';
        $htmlOutput .='<h1><span>Mijn bestellingen:</span></h1>';
        $htmlOutput .='Geen online bestellingen gevonden';
        $htmlOutput .='</div>';
        $htmlOutput .='<div class="wishList">';
        $htmlOutput .='<h1><span>Mijn wishlist:</span></h1>';
        $htmlOutput .='Geen items in je wishlist.';
        $htmlOutput .='</div>';
        $htmlOutput .='</div>';

        echo $htmlOutput;
    }
?>