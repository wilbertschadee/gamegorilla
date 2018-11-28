<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css" />
   
</head>
<body>
    <form action="php/login.php" method="post">
        <div class="container">
            <h1>Login</h1>

            <label for="Email">Email</label>
            <input type="text" placeholder="Email" name="Email" required autofocus>

            <label for="Password">Wachtwoord</label>
            <input type="password" placeholder="Wachtwoord" name="Password" required>
          
            <button type="submit" class="signupbtn">Login</button>
            <h2><span>of</span></h2>
            <button type="button" onclick="window.location.href='signUp.php'">Sign up</button>
        </div>
    </form>
</body>
</html>