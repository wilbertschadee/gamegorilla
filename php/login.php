<?php

    require "dbConnection.php";

    $user_email = $_POST["Email"];
    $user_password = $_POST["Password"];


    $sql = "SELECT * FROM users WHERE email='$user_email' AND upassword='$user_password'" ;
    
    $data = $conn->query($sql);

    // $data->execute(array($user_email,$user_password));
    // $row = $data->fetch(PDO::FETCH_BOTH);

    if($data->rowCount() > 0) {
        //$_SESSION['username'] = $user_email;
        header('location: ../login.php?succes');
        // echo $user_email;
    } else {
        $message = "Username/Password is wrong";
        echo $message;
    }

?>