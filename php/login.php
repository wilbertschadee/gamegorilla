<?php

    require "dbConnection.php";

    $user_email = $_POST["Email"];
    $user_password = $_POST["Password"];


    $sql = "SELECT * FROM users WHERE email='$user_email' AND upassword='$user_password'" ;
    
    $data = $conn->query($sql);

    // $data->execute(array($user_email,$user_password));
    // $row = $data->fetch(PDO::FETCH_BOTH);

    foreach($data as $row){

        if($data->rowCount() > 0) {
            // $_SESSION['username'] = $user_email;
            header('location: ../profile.php?user_id=' . $row['user_id']);
            // echo $user_email;
        } else {
            $message = "Username/Password is wrong";
            echo $message;
        }
    }
// if(isset($_SESSION["NAME"]) || $_SESSION["NAME"] != ""){

// }

// STATEMENT ? TRUE  : FALSE
?>