<?php
    header("Content-Type: text/html; charset=ISO-8859-1");
    include "php/class_lib.php";
    $products = $_GET['id'];
    // $db_conn = new DBC;
    // $db_conn -> init_connection();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php 

            $title0 = new productTitle($products);
            $title0 -> echoTitle(); 

        ?>
    </title>

<?php
    include "nav.php";

    $products0 = new products($products);
    $products0 -> echoProduct(); 

?>
        
        
    
