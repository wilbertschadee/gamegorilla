<?php
    require "nav.php";
    include "php/class_lib.php";
    $cat = "games"
?>

        <div id="wrapper">
            <div class="productWrapper">
                <div class="cat">GAMES</div>
                <div class="products">
                    <?php 

                           $productCard0 = new productCard();
                           $productCard0 -> echoCard();

                    ?>
                </div>
            </div>
        </div>
    </body>
</html> 