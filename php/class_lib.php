<?php

    class getDBData extends DBC{
       
        public function getData($query){
            $this->init_connection();
            $data = $this->database_conn->query($query);
            // $data = $this->init_connection();
            // $data = $this->$database_conn->query($query);  
            $data = $data->fetch(PDO::FETCH_ASSOC);
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
    
    class productCard extends getDBData{

        private $date;
        protected $query;
    
        public function __construct() {
            $this -> date = date('Y-m-d');
            $this -> query =  "SELECT * FROM products WHERE category = 'games'";
            $this -> data = $this->getData($this -> query);
        }

        public function echoCard(){
            echo '<div class="product"> 
            <a href="' . 'products.php?id=' . $this->data['id'] . '">
            <img src="' . $this->data['img_path'] . '" alt="' . $this->data['name'] . '" style="max-width:100%">' . 
            ($this->data['releases'] >= $this->date?'<p class="release">' . $this->data['releases'] . ' beschikbaar</p>':"").
            '<h1 class=name>'. $this->data['name'] . ' - ' . $this ->data['platform'] . '</h1>
            '.($this->data['sale'] == 1?'<p class="price"><span class="oldPrice"> € ' . $this->data['price'] . '</span> - €' . $this->data['salePrice'] . '</p>':'<p class="price"> € ' . $this->data['price'] . '</p>').
            '</a>
            </div>';
        }
    }

    class products extends getDBData{

        private $date;
        protected $query;
    
        public function __construct($id) {
            $this -> date = date('Y-m-d');
            $this -> query =  "SELECT * FROM products WHERE id = $id";
            $this -> data = $this->getData($this -> query);
        }


        public function echoProduct(){
            echo '<div class="productContent">
            <div class="productRow">
            <img src="' . $this->data['img_path'] . '" alt="">
            <div class="productInfo">
            <h1 class="productName">' . $this->data['name'] . ' - ' . $this ->data['platform']  . '</h1>'
            .($this->data['releases'] >= $this->date?'<div class="release"> Beschikbaar vanaf ' . $this->data['releases'] . '</div>':"")
            .($this->data['sale'] == 1?'<p class="productPrice"><span class="oldPrice">&euro; ' . $this->data['price'] . '</span> - &euro;' . $this->data['salePrice'] . '</p>':'<div class="productPrice">&euro;'. $this->data['price'] . '</div>').
            '<button class="cartBtn" onclick="addToWishlist()">Aan Wishlist toevoegen</button><br><br><br>
            <button class="cartBtn" onclick="addToCart()">Toevoegen aan winkemandje</button><br><br><br>
            <div id="feedBack" style="display:none;"></div>'
            . (isset($_SESSION['role']) && $_SESSION['role'] == 1? '
            <div>
            <form action="php/addSale.php?id=' . $this->data['id'] . '" method="post">
            <label for="sale">Sale</label><br>
            <input class="radio" type="radio" value="1" name="sale"> Ja 
            <input class="radio" type="radio" value="0" name="sale"> Nee<br>
            <label for="saleprice">Prijs in de Sale</label>
            <input class="change" type="text" placeholder="prijs in de Sale" name="saleprice">
            <button type="submit" class="signupbtn">aanpassen</button> 
            </form>
            </div>
            ':"") .         
            '</div>
            <div id="product" style="display:none;">' . $this->data['id'] . '</div>
            </div>
            <div class="description">Beschrijving</div>
            <div class="productDescription">'
            . $this->data['description'] . 
            '</div>
            </div>';
        }


    }

    class productTitle extends getDBData{

        

        public function __construct($id){
            $this -> query =  "SELECT * FROM products WHERE id = $id";
            $this -> data = $this->getData($this -> query);
        }

        public function echoTitle(){
            echo $this->data["platform"] . " || " . $this->data["name"];
        }
    }

    class login{

        
    }

    // class db{
    //     protected $connection = 10;
    //     protected $db_connection;

    //     public initConnect(){

    //     }
    // }

    // class getd extends db{
    //     private $data = 20;        

    //     public function giievData($query){
    //         $this->init();
    //         $this->db_connection;
    //         return $this -> data;
    //     }
    // }

    // class showTitle extends getd{
    //     private $data;
    //     private $query = "SELECT * FROM World";

    //     function __construct(){
    //         $this -> data = giievData($this -> $query);
    //     }

    //     public function showShit(){
    //        // $this -> data -> asidhoas;
    //     }
    // }
    
?>
