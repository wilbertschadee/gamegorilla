<?php

session_start();

include "nav.php";




    echo'<div class="wrapper">
        <div class="cat">Wijzig gegevens</div>
        <div class="welcome">persoonlijke <span> Gegevens</span></div>
        <div class="info">
        <form action="php/changeForm.php" method="post">
            <label for="Email">Email</label>
            <input class="change" type="text" placeholder="Email" name="Email" value="' . $_SESSION['username'] . '">

            <label for="fname">Voornaam</label>
            <input class="change" type="text" placeholder="Voornaam" name="fname" value="' . $_SESSION['firstname'] . '">

            <label for="lname">Achternaam</label>
            <input class="change" type="text" placeholder="Achternaam" name="lname" value="' . $_SESSION['lastname'] . '">

            <label for="place">Plaatsnaam</label>
            <input class="change" type="text" placeholder="Plaatsnaam" name="place" value="' . $_SESSION['place'] . '">

            <label for="streetname">Straatnaam</label>
            <input class="change" type="text" placeholder="Straatnaam" name="streetname" value="' . $_SESSION['street'] . '">

            <label for="housenumber">Huisnummer</label>
            <input class="change" type="text" placeholder="Huisnummer" name="housenumber" value="' . $_SESSION['house'] . '">
            
            <label for="zipcode">Postcode</label>
            <input class="change" type="text" placeholder="Postcode" name="zipcode" value="' . $_SESSION['zip'] . '">

            <label for="phonenumber">Telefoonnummer</label>
            <input class="change" type="text" placeholder="Telefoonnummer" name="phonenumber" value="' . $_SESSION['phone'] . '">

            <label for="birthdate">Geboortedatum</label>
            <input class="change" type="date" placeholder="geboortedatum" name="birthdate" value="' . $_SESSION['birthday'] . '">

            <button type="submit" class="signupbtn">Veranderen</button>'
            ?>

            <button class="cancelBtn" type="button" onclick="window.location.href='index.php'">Annuleren</button>
        </form>
        </div>
        </div>
    </body>
</html>'
