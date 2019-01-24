<?php

    include "dbConnection.php";
    
    $profile = $_GET['user_id'];

    $sql = "SELECT * FROM orders WHERE user_id = '$profile'";

    $data = $conn->query($sql);

    foreach($data as $row){

        if($data->rowCount() > 0) {

            $orders = $row['product_id'];

            $sql = "SELECT * FROM products WHERE id = '$orders'";
        
            $data = $conn->query($sql);
        
            $date = date('Y-m-d');
        
            foreach ($data as $row){
                    echo '<div class="product"> 
                    <a href="' . 'products.php?id=' . $row['id'] . '">
                    <img src="' . $row['img_path'] . '" alt="' . $row['name'] . '" style="max-width:100%">
                    '.($row["releases"] >= $date?'<p class=release>' . $row['releases'] . ' beschikbaar</p>':"").
                    '<h1 class=name>'. $row['name'] . ' - ' . $row['platform'] . '</h1>
                    '.($row["sale"] == 1?'<p class="price"><span class="oldPrice"> € ' . $row['price'] . '</span> - €' . $row['sale_price'] . '</p>':'<p class="price"> € ' . $row['price'] . '</p>').
                    '</a>
                    </div>';   
            }
        }else{
            echo 'Geen online bestellingen gevonden ';
        }
    }
?>

    
