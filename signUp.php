<?php include "nav.php"?>

    <form action="php/signup.php" method="post">
        <div class="container">
            <h1>Sign Up</h1>

            <label for="Email">Email</label>
            <input class="inlog" type="text" placeholder="Email" name="Email" required autofocus>

            <label for="Password">Wachtwoord</label>
            <input class="inlog" type="password" placeholder="Wachtwoord" name="Password" required>

            <label for="Fname">Voornaam</label>
            <input class="login" type="text" placeholder="Voornaam" name="Fname" required>
        
            <label for="Lname">Achternaam</label>
            <input class="inlog" type="text" placeholder="Achternaam" name="Lname" required>

           
            <button type="submit" class="signupBtn">Sign Up </button>
            <button type="button" class="cancelBtn" onclick="window.location.href='logIn.php'">Cancel</button>
        </div>
    </form>



</body>
</html>