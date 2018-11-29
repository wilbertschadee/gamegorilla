<?php

    header("Content-Type: text/html; charset=ISO-8859-1");

    include "php/dbConnection.php";

    $products = $_GET['game_id'];

    $sql = "SELECT * FROM games WHERE game_id = '$products'";
    
    $data = $conn->query($sql); 

    include "nav.php";
    $date = date('Y-m-d');

    foreach ($data as $row){
        if($row["sale"] == 1){   
            $htmlOutput  = "";   
            $htmlOutput  = '<div class="productContent">';
            $htmlOutput .= '<div class="productRow">';
            $htmlOutput .= '<img src="' . $row['img_path'] . '" alt="">';
            $htmlOutput .= '<div class="productInfo">';
            $htmlOutput .= '<h1 class="productName">' . $row['game_name'] . ' - ' . $row['platform'] . '</h1>';
            $htmlOutput .= '<p class="productPrice"><span class="oldPrice">&euro; ' . $row['price'] . '</span> - &euro;' . $row['sale_price'] . '</p>';
            $htmlOutput .= '</div>';
            $htmlOutput .= '</div>';
            $htmlOutput .= '<div class="description">Beschrijving</div>';
            $htmlOutput .= '<div class="productDescription">';
            $htmlOutput .= $row['description'];
            $htmlOutput .= '</div>';
            $htmlOutput .= '</div>';

            echo $htmlOutput;

        }else if($row["releases"] >= $date){   
            $htmlOutput  = "";   
            $htmlOutput  = '<div class="productContent">';
            $htmlOutput .= '<div class="productRow">';
            $htmlOutput .= '<img src="' . $row['img_path'] . '" alt="">';
            $htmlOutput .= '<div class="productInfo">';
            $htmlOutput .= '<h1 class="productName">' . $row['game_name'] . ' - ' . $row['platform'] . '</h1>';
            $htmlOutput .= '<div class="release"> Beschikbaar vanaf ' . $row['releases'] . '</div>';
            $htmlOutput .= '<div class="productPrice">&euro;'. $row['price'] . '</div>';
            $htmlOutput .= '</div>';
            $htmlOutput .= '</div>';
            $htmlOutput .= '<div class="description">Beschrijving</div>';
            $htmlOutput .= '<div class="productDescription">';
            $htmlOutput .= $row['description'];
            $htmlOutput .= '</div>';
            $htmlOutput .= '</div>';

            echo $htmlOutput;

        }else{
            $htmlOutput  = "";   
            $htmlOutput  = '<div class="productContent">';
            $htmlOutput .= '<div class="productRow">';
            $htmlOutput .= '<img src="' . $row['img_path'] . '" alt="">';
            $htmlOutput .= '<div class="productInfo">';
            $htmlOutput .= '<h1 class="productName">' . $row['game_name'] . ' - ' . $row['platform'] . '</h1>';
            $htmlOutput .= '<div class="productPrice">&euro;'. $row['price'] . '</div>';
            $htmlOutput .= '</div>';
            $htmlOutput .= '</div>';
            $htmlOutput .= '<div class="description">Beschrijving</div>';
            $htmlOutput .= '<div class="productDescription">';
            $htmlOutput .= $row['description'];
            $htmlOutput .= '</div>';
            $htmlOutput .= '</div>';

            echo $htmlOutput;
        }
    }
?>  