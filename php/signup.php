<?php

    include "dbConnection.php";

    $user_email = $_POST["Email"];
    $user_password = $_POST["Password"];
    $user_firstname = $_POST["Fname"];
    $user_lastname = $_POST["Lname"];

    try {
        $sql = "INSERT INTO users (email, upassword, fname, lname)
        VALUES ('$user_email', '$user_password', '$user_firstname', '$user_lastname')";
        // use exec() because no results are returned
        $conn->exec($sql);
        // echo "New record created successfully";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

header("Location: ../signUp.php");
        
        
?>