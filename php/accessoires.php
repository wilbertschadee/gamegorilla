<?php
    
    include "dbConnection.php";
    
    $sql = "SELECT * FROM products WHERE category = 'accessoires' ";
    
    $data = $conn->query($sql);

    $date = date('Y-m-d');

    foreach ($data as $row){
        if($row["sale"] == 1){ 
        
            $htmlOutput  = "";         
            $htmlOutput  = '<div class="product">';
            $htmlOutput .= '<a href="' . 'products.php?id=' . $row['id'] . '">';
            $htmlOutput .= '<img class="img" src="' . $row['img_path'] . '" alt="' . $row['name'] . '" style="max-width:100%">';
            $htmlOutput .= '<h1 class=name>'. $row['name'] . " - " . $row['platform'] . '</h1>';
            $htmlOutput .= '<p class="price"><span class="oldPrice"> € ' . $row['price'] . '</span> - €' . $row['sale_price'] . '</p>';
            $htmlOutput .= '</a>';
            $htmlOutput .= '</div>';   

            echo $htmlOutput;
        
        }else  if($row["releases"] >= $date){

            $htmlOutput  = "";         
            $htmlOutput  = '<div class="product">';
            $htmlOutput .= '<a href="' . 'products.php?id=' . $row['id'] . '">';
            $htmlOutput .= '<img class="img" src="' . $row['img_path'] . '" alt="' . $row['name'] . '" style="max-width:100%">';
            $htmlOutput .= '<p class=release>' . $row['releases'] . ' beschikbaar</p>';
            $htmlOutput .= '<h1 class=name>'. $row['name'] . " - " . $row['platform'] . '</h1>';
            $htmlOutput .= '<p class="price"> € ' . $row['price'] . '</p>';
            $htmlOutput .= '</a>';
            $htmlOutput .= '</div>';   

            echo $htmlOutput;

        }else {  

            $htmlOutput  = "";         
            $htmlOutput  = '<div class="product">';
            $htmlOutput .= '<a href="'. 'products.php?id=' . $row['id'] . '">';
            $htmlOutput .= '<img class="img" src="' . $row['img_path'] . '" alt="' . $row['name'] . '" style="max-width:100%">';   
            $htmlOutput .= '<h1 class=name>'. $row['name'] . " - " . $row['platform'] . '</h1>';
            $htmlOutput .= '<p class="price"> € ' . $row['price'] . '</p>';
            $htmlOutput .= '</a>';
            $htmlOutput .= '</div>'; 

            echo $htmlOutput;

        } 
    }
    
?> 
