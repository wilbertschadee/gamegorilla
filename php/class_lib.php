<?php

    class getDBData {
        private $db_querie;
        private $db_conn;

        public function __construct($db_conn, $querie) {
            $this -> db_conn = $db_conn;
            $this -> db_querie = $querie;
        }

        public function getDBData(){            
            $data = $this -> db_conn -> query($this -> db_querie);  
            return $data;
        }
    }

    class DBC{
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "gameGorilla";

        public $database_conn;

        public function init_connection(){
            try {         
                $dbm = "mysql:host=" . $this -> servername . ";dbname=" . $this -> database;

                $conn = new PDO($dbm, $this -> username, $this -> password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $this -> database_conn = $conn;
                // echo "Connected successfully: <br>"; 
            }
            catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }
    
    class productCard{
        private $product_id;
        private $product_name;
        private $product_price;
        private $product_platform;
        private $product_sale;
        private $product_salePrice;
        private $product_release;
        private $product_img;
        private $date;
    
            public function __construct($id, $name, $price, $platform, $sale, $salePrice, $release, $img) {
                $this -> product_id = $id;
                $this -> product_name = $name;
                $this -> product_price = $price;
                $this -> product_platform = $platform;
                $this -> product_sale = $sale;
                $this -> product_salePrice = $salePrice;
                $this -> product_release = $release;
                $this -> product_img = $img;
                $this -> date = date('Y-m-d');
            }
    
            public function echoCard(){
                echo '<div class="product"> 
                <a href="' . 'products.php?id=' . $this -> product_id . '">
                <img src="' . $this -> product_img . '" alt="' . $this -> product_name . '" style="max-width:100%">
                '.($this -> product_release >= $this -> date?'<p class=release>' . $this -> product_release . ' beschikbaar</p>':"").
                '<h1 class=name>'. $this -> product_name . ' - ' . $this -> product_platform . '</h1>
                '.($this -> product_sale == 1?'<p class="price"><span class="oldPrice"> € ' . $this -> product_price . '</span> - €' . $this -> product_salePrice . '</p>':'<p class="price"> € ' . $this -> product_price . '</p>').
                '</a>
                </div>';
            }
        }
    

?>
