<?php
    require "nav.php";
    include "php/class_lib.php";
?>

        <div id="wrapper">
            <div class="productWrapper">
                <div class="cat">GAMES</div>
                <div class="products">
                    <?php 
                       $db_conn = new DBC;
                       $db_conn -> init_connection();
                   
                       $getDBData = new getDBData($db_conn -> database_conn, "SELECT * FROM products WHERE category = 'games'");
                       $dbData = $getDBData -> getDBData();
                   
                        foreach ($dbData as $row){ 
                           $productCard0 = new productCard($row['id'], $row['name'], $row['price'], $row['platform'], $row['sale'], $row['sale_price'], $row['releases'], $row['img_path']);
                           $productCard0 -> echoCard();
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html> 