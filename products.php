<?php

    header("Content-Type: text/html; charset=ISO-8859-1");

    include "nav.php";
    include "php/class_lib.php";

    $products = $_GET['id'];

    
    $db_conn = new DBC;
    $db_conn -> init_connection();

    $getDBData = new getDBData($db_conn -> database_conn, "SELECT * FROM products WHERE id = '$products'");
    $dbData = $getDBData -> getDBData();

    foreach ($dbData as $row){ 
        $products0 = new products($row['id'], $row['name'], $row['description'], $row['price'], $row['platform'], $row['sale'], $row['sale_price'], $row['releases'], $row['img_path']);
        $products0 -> echoProduct(); 
    }
?>
        
        
    
