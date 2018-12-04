<?php 

    include "dbConnection.php";

    session_start();

    $productId = $_GET['id'];
    $userId = $_SESSION['userid'];

    echo $productId;

    try {
        $sql = "INSERT INTO wishlist (user_id, product_id)
        VALUES ('$userId', '$productId')";
        // use exec() because no results are returned
        $conn->exec($sql);
        // echo "New record created successfully";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

