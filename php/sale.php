<?php
    
    include "dbConnection.php";
    
    $sql = "SELECT * FROM games WHERE sale='1'";
    
    $data = $conn->query($sql); 


    foreach ($data as $row)
    {   
        $htmlOutput  = "";         
        $htmlOutput  = '<div class="product">';
        $htmlOutput .= '<a href="' . 'productsgames.php?game_id=' . $row['game_id'] . '">';
        $htmlOutput .= '<img src="' . $row['img_path'] . '" alt="' . $row['game_name'] . '" style="max-width:100%">';
        $htmlOutput .= '<h1 class=name>'. $row['game_name']  . '</h1>';
        $htmlOutput .= '<p class="price"><span class="oldPrice"> € ' . $row['price'] . '</span> - €' . $row['sale_price'] . '</p>';
        $htmlOutput .= '</a>';
        $htmlOutput .= '</div>';   

        echo $htmlOutput;
    }  

?> 
