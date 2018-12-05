<?php
    require "nav.php"
?>

        <div id="wrapper">
            <div class="productWrapper">
                <div class="cat">GAMES</div>
                <div class="products">
                    <?php include "php/class_lib.php";
                       echo $productCardObject;
                    ?>
                </div>
            </div>
        </div>
</body>
</html> 