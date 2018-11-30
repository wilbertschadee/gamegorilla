<?php
    
    include "dbConnection.php";
    
    $sql = "SELECT * FROM games WHERE releases >= DATE_ADD(CURDATE(), INTERVAL -1 month);";
    
    $data = $conn->query($sql); 


    foreach ($data as $row)
    {   
        $htmlOutput  = "";         
        $htmlOutput  = '<div class="product">';
        $htmlOutput .= '<a href="' . 'productsgames.php?game_id=' . $row['game_id'] . '">';
        $htmlOutput .= '<img src="' . $row['img_path'] . '" alt="' . $row['game_name'] . '" style="max-width:100%">';
        $htmlOutput .= '<p class=release>' . $row['releases'] . ' beschikbaar</p>';
        $htmlOutput .= '<h1 class=name>'. $row['game_name']  . '</h1>';
        $htmlOutput .= '<p class="price"> € ' . $row['price'] . '</p>';
        $htmlOutput .= '</a>';
        $htmlOutput .= '</div>';   

        echo $htmlOutput;
    }  

?> 
