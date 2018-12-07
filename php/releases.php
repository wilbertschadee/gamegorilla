<?php
    
    include "dbConnection.php";
    
    $sql = "SELECT * FROM products WHERE releases >= DATE_ADD(CURDATE(), INTERVAL 0 day);";
    
    $data = $conn->query($sql); 


    foreach ($data as $row)
    {   
        $htmlOutput  = "";         
        $htmlOutput  = '<div class="product">';
        $htmlOutput .= '<a href="' . 'products.php?id=' . $row['id'] . '">';
        $htmlOutput .= '<img src="' . $row['img_path'] . '" alt="' . $row['name'] . '" style="max-width:100%">';
        $htmlOutput .= '<p class=release>' . $row['releases'] . ' beschikbaar</p>';
        $htmlOutput .= '<h1 class=name>'. $row['name']  . '</h1>';
        $htmlOutput .= '<p class="price"> € ' . $row['price'] . '</p>';
        $htmlOutput .= '</a>';
        $htmlOutput .= '</div>';   

        echo $htmlOutput;
    }  

?> 
