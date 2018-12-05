<?php

    include "dbConnection";

    class productCard{

        public $category = "";
        private $sql = "SELECT * FROM products WHERE category = ";
        public $data = $conn->query($sql);
        private $date = date('Y-m-d');

        public $id;
        public $img;
        public $name;
        public $release;
        public $platform;
        public $price;
        public $sale;
        public $salePrice;

        function htmlOutput(){        
            echo '<div class="product"> 
            <a href="' . 'products.php?id=' . $id . '">
            <img src="' . $img . '" alt="' . $name . '" style="max-width:100%">
            '.($release >= $date?'<p class=release>' . $releases . ' beschikbaar</p>':"").
            '<h1 class=name>'. $name . ' - ' . $platform . '</h1>
            '.($sale == 1?'<p class="price"><span class="oldPrice"> € ' . $price . '</span> - €' . $saleprice . '</p>':'<p class="price"> € ' . $row['price'] . '</p>').
            '</a>
            </div>';   
        }
    }

    foreach ($data as $row){
        $id = $row['id'];
        $img = $row['img_path'];
        $name = $row['name'];
        $release = $row["releases"];
        $platform = $row['platform'];
        $price = $row['price'];
        $sale = $row["sale"];
        $salePrice = $row['sale_price'];
    }

    $productCardObject = new productCard;
    $productCardObject -> category = 'games';
    echo $productCardObject

?>