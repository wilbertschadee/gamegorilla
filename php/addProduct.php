<?php

    session_start();

    $profile = $_SESSION['userid'];

    include "dbConnection.php";

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $platform = $_POST['platform'];
    $type = $_POST['type'];
    $theme = $_POST['theme'];
    $sale = $_POST['sale'];
    $saleprice = $_POST['saleprice'];
    $release = $_POST['release'];
    $img = $_POST['img'];
    $category = $_POST['category'];

    try {
        $sql = "INSERT INTO products (`name`, price, `description`, platform, `type`, theme, sale, sale_price, 
        releases, img_path, category)
        VALUES ('$name', '$price', '$description', '$platform', '$type', '$theme', '$sale', '$saleprice', 
        '$release', '$img', '$category')";
        // use exec() because no results are returned
        $conn->exec($sql);
        // echo "New record created successfully";

        header('location: ../addProduct.php?succes')
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();

        header('location: ../addProduct.php?error')
    }

    $conn = null;
    
?>