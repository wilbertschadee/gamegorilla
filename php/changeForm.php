<?php

session_start();

$profile = $_SESSION['userid'];

include "dbConnection.php";

    $user_email = $_POST["Email"];
    $user_firstname = $_POST["fname"];
    $user_lastname = $_POST["lname"];
    $user_place = $_POST["place"];
    $user_street = $_POST["streetname"];
    $user_house = $_POST["housenumber"];
    $user_zip = $_POST["zipcode"];
    $user_phone = $_POST["phonenumber"];
    $user_birth = $_POST["birthdate"];

    $_SESSION['username'] = $_POST["Email"];
    $_SESSION['firstname'] = $_POST["fname"];
    $_SESSION['lastname'] = $_POST["lname"];
    $_SESSION['place'] = $_POST["place"];
    $_SESSION['street'] = $_POST["streetname"];
    $_SESSION['house'] = $_POST["housenumber"];
    $_SESSION['zip'] = $_POST["zipcode"];
    $_SESSION['phone'] = $_POST["phonenumber"];
    $_SESSION['birthday'] = $_POST["birthdate"];

    try {
        $sql = "UPDATE users SET email = '$user_email', fname = '$user_firstname', lname = '$user_lastname',
        place = '$user_place', streetname = '$user_street', housenumber = '$user_house', zipcode = '$user_zip',
        phonenumber = '$user_phone', birthdate = '$user_birth' Where user_id = '$profile' ";
        $conn->exec($sql);
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

    header('location: ../profile.php?user_id=' . $_SESSION['userid']);
?>


    