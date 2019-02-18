<?php
    header("Content-Type: text/html; charset=ISO-8859-1");
    include "php/class_lib.php";
    $products = $_GET['id'];
    $db_conn = new DBC;
    $db_conn -> init_connection();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php 

        $getDBData0 = new getDBData($db_conn -> database_conn, "SELECT * FROM products WHERE id = '$products'");
        $dbData = $getDBData0 -> getDBData();

        foreach ($dbData as $row){  
            $title0 = new productTitle($row['id'], $row['name'], $row['category']);
            $title0 -> title(); 
        }
        ?>
    </title>

<?php
    include "nav.php";

    $getDBData1 = new getDBData($db_conn -> database_conn, "SELECT * FROM products WHERE id = '$products'");
    $dbData = $getDBData1 -> getDBData();

    foreach ($dbData as $row){ 
        $products0 = new products($row['id'], $row['name'], $row['description'], $row['price'], $row['platform'], $row['sale'], $row['sale_price'], $row['releases'], $row['img_path']);
        $products0 -> echoProduct(); 
    }
?>
        
        
    
