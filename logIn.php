<?php include "nav.php" ?>

    <form action="php/login.php" method="post">
        <div class="container">
            <h1 class="loginHeader">Login</h1>

            <label for="Email">Email</label>
            <input type="text" placeholder="Email" name="Email" required autofocus>

            <label for="Password">Wachtwoord</label>
            <input type="password" placeholder="Wachtwoord" name="Password" required>
          
            <button type="submit" class="signupbtn">Login</button>
            <h2 class="line"><span>of</span></h2>
            <button type="button" onclick="window.location.href='signUp.php'">Sign up</button>
        </div>
    </form>
</body>
</html>