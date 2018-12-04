<?php

    header("Content-Type: text/html; charset=ISO-8859-1");

    include "php/dbConnection.php";

    $products = $_GET['id'];

    $sql = "SELECT * FROM products WHERE id = '$products'";
    
    $data = $conn->query($sql); 

    include "nav.php";
    $date = date('Y-m-d');

    foreach ($data as $row){
         
        echo '<div class="productContent">
        <div class="productRow">
        <img src="' . $row['img_path'] . '" alt="">
        <div class="productInfo">
        <h1 class="productName">' . $row['name'] . ' - ' . $row['platform'] . '</h1>'
        .($row["releases"] >= $date?'<div class="release"> Beschikbaar vanaf ' . $row['releases'] . '</div>':"")
        .($row["sale"] == 1?'<p class="productPrice"><span class="oldPrice">&euro; ' . $row['price'] . '</span> - &euro;' . $row['sale_price'] . '</p>':'<div class="productPrice">&euro;'. $row['price'] . '</div>').
        '<button class="cartBtn" onclick="addToWishlist()">Aan Wishlist toevoegen</button>
        </div>
        <div id="product" style="display:none;">' . $row['id']. '</div>
        </div>
        <div class="description">Beschrijving</div>
        <div class="productDescription">'
        . $row['description'] . 
        '</div>
        </div>';
        
        
    }
?>  