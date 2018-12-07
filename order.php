<?php

    include "php/dbConnection.php";

    include "nav.php";

    
    
    $sql = "SELECT order_number FROM orders";

    $data = $conn->query($sql);

    foreach($data as $row){

        $orderNumber = $row['order_number'];

        if($orderNumber== Null){
            $orderNumber = 0;
        }else {
            $orderNumber++;
        }
    }
    for ($i = 0; $i < count($_SESSION['cart']); $i++) {

        $productID = $_SESSION['cart'][$i];
        $userID = $_SESSION['userid'];

        try {
            $sql = "INSERT INTO orders(user_id, product_id, order_number)
            VALUES ('$userID', '$productID', '$orderNumber')";

            $conn->exec($sql); 
        }

        catch(PDOException $e){
            // echo $sql . "<br>" . $e->getMessage();
        }
        echo '<div class="wrapper">
        <div class="cart">
        bedankt voor uw bestelling 
        </div>
        </div>';
    }

    $_SESSION['cart'] = array();
    