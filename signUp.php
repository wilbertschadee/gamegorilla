<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="php/signup.php" method="post">
        <div class="container">
            <h1>Sign Up</h1>

            <label for="Email">Email</label>
            <input type="text" placeholder="Email" name="Email" required autofocus>

            <label for="Password">Wachtwoord</label>
            <input type="password" placeholder="Wachtwoord" name="Password" required>

            <label for="Fname">Voornaam</label>
            <input type="text" placeholder="Voornaam" name="Fname" required>
        
            <label for="Lname">Achternaam</label>
            <input type="text" placeholder="Achternaam" name="Lname" required>

           
            <button type="submit" class="signupbtn">Sign Up</button>
            <button type="button" class="cancelbtn" onclick="window.location.href='logIn.php'">Cancel</button>
        </div>
    </form>



</body>
</html>