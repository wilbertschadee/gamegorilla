<?php

    include "nav.php";

?>

    <div class="wrapper">
    <div class="cat">Producten Toevoegen</div>
    <div class="info">
    <form action="php/addProduct.php" method="post">
        <label for="name">Product Naam</label>
        <input class="change" type="text" placeholder="Product Naam" name="name" required autofocus>

        <label for="price">Product Prijs</label>
        <input class="change" type="text" placeholder="Prijs" name="price" required>

        <label for="description">Beschrijving</label>
        <input class="change" type="text" placeholder="Beschrijving" name="description" required>

        <label for="platform">Platform</label>
        <select class="change" name="platform">
            <option value="PS4">PS4</option>
            <option value="XboxONE">Xbox ONE</option>
            <option value="Switch">Switch</option>
            <option value="PC">PC</option>
        </select> 

        <label for="type">Type</label>
        <input class="change" type="text" placeholder="Type" name="type" >

        <label for="theme">Thema</label>
        <input class="change" type="text" placeholder="Thema" name="theme">
        
        <label for="sale">Sale</label><br>
        <input class="radio" type="radio" value="1" name="sale"> Ja &nbsp;&nbsp; 
        <input class="radio" type="radio" value="0" name="sale"> Nee<br>

        <label for="saleprice">Prijs in de Sale</label>
        <input class="change" type="text" placeholder="prijs in de Sale" name="saleprice">

        <label for="release">Release Datum</label>
        <input class="change" type="date" placeholder="release Datum" name="release">

        <label for="img">Afbeelding</label>
        <input class="change" type="text" placeholder="Afbeelding" name="img" required>

        <label for="category">Categorie</label>
        <select class="change" name="category">
            <option value="games">GAMES</option>
            <option value="consoles">CONSOLES</option>
            <option value="accessoires">ACCESSOIRES</option>
        </select> 

        <button type="submit" class="signupbtn">Toevoegen</button>
        
        <button class="cancelBtn" type="button" onclick="window.location.href='index.php'">Annuleren</button>
    </form>
    </div>
    </div>
</body>
</html>