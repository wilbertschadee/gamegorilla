<?php include "nav.php" ?>

    <div class="wrapper">
        <div class="cart">
            <?php include "php/showCart.php"; 
            if(!empty($_SESSION['cart'])){
            echo '<a href="php/order.php">bestellen</a>';
            }
            ?>
        </div>
       
    </div>
</body>

</html>