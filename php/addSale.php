<?php

    include "dbConnection.php";

    $product = $_GET['id'];

    $sale = $_POST['sale'];
    $saleprice = $_POST['saleprice'];

    echo $product;

    try {
        $sql = "UPDATE products SET sale = '$sale', sale_price = '$saleprice' WHERE id = '$product' ";
        $conn->exec($sql);

        header('location: ../products.php?succesfullyChangedSale');

    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();

        header('location: ../products.php?notSoSuccesfullyChangedSale');
    }

    $conn = null;

    
