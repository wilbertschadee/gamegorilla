<?php

    header("Content-Type: text/html; charset=ISO-8859-1");

    include "php/dbConnection.php";

    session_start();

    if(empty($_SESSION['cart'])){
        echo 'jou winkel mandje is leeg';
    }else{

        $productID = implode(',', $_SESSION['cart']);

        // echo $productID;

        $sql = "SELECT * FROM products Where id IN ($productID)";

        $data = $conn->query($sql);

        // echo $sql;
        include "nav.php";
 echo '<div class="wrapper">';

        foreach($data as $row){
           
                echo'<div class="cart">
                <div class="cartProduct">
                    <img src="'. $row['img_path'] . '" alt="">
                    <div class="cartInfo">
                        <div class="cartInfoName">
                        <h1 class="name">' . $row['name'] . '</h1>'
                        .($row["sale"] == 1?'<p class="productPrice"><span class="oldPrice">&euro; ' . $row['price'] . '</span> - &euro;' . $row['sale_price'] . '</p>':'<div class="productPrice">&euro;'. $row['price'] . '</div>').
                        '</div>
                        <div class="cartInfoDes">'
                            .$row['description'].
                        '</div>
                    </div>
                    
                </div>
            </div>';
        
        }
        echo '</div>';
    }
?>
<!-- <div class="money">
                        <div class="amount">
                            1
                        </div>
                        <div class="total">
                            20euro
                        </div>
                    </div> -->