<?php
    session_start();

    require "dbConnection.php";

    $useremail = $_POST["Email"];
    $userpassword = $_POST["Password"];

    $sql = "SELECT * FROM users WHERE email='$useremail' AND upassword='$userpassword'" ;
    
    $data = $conn->query($sql);

    foreach($data as $row){

        if($data->rowCount() > 0) {
            $_SESSION['userid'] = $row['user_id'];
            $_SESSION['username'] = $row['email'];
            $_SESSION['firstname'] = $row['fname'];
            $_SESSION['lastname'] = $row['lname'];
            $_SESSION['place'] = $row['place'];
            $_SESSION['street'] = $row['streetname'];
            $_SESSION['house'] = $row['housenumber'];
            $_SESSION['zip'] = $row['zipcode'];
            $_SESSION['phone'] = $row['phonenumber'];
            $_SESSION['birthday'] = $row['birthdate'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['loggedin'] = true; 

            header('location: ../profile.php?user_id=' . $_SESSION['userid']);
        } else {
            $message = "Username/Password is wrong";
            echo $message;
        }
    }

?>