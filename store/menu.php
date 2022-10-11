<div class="menu" id="menu">
        <div style="margin-left: 100px;text-align: center;" id="men">
            <div style="text-align:center;">
                <h2>SHELLIN</h2>
            </div>
            <div style="text-align:start;">
                <?php
                if (isset($_SESSION["user"])) {
                    $e = new Encript();
                ?>

                    <h4 style="margin-left: 10px;margin-top: 10px;cursor: pointer;margin-bottom: 10px;"><?php echo $e->decrypt($_SESSION["user"]["user_email"]) ?></h4>
                <?php
                }
                ?>

            </div>
            <div style="text-align:start;">
                <?php
                if (isset($_SESSION["user"])) {
                ?>
                    <span style="margin-left: 10px;margin-top: 10px;cursor: pointer;" class="user" onclick="window.location='user_page.php'">Account</span>
                <?php
                }
                ?>
            </div>



            <h1>Me</h1>

            <div class="box">
                <img src="images/cart.svg" style="width:20px;aspect-ratio: 1;display: inline-block;margin-right: 10px;" />
                <h3 style="margin-top: 3px;margin-bottom: 3px;display: inline-block;" onclick="window.location='cart.php';">Cart</h3>
            </div>

            <!-- <div class="box">
                <img src="images/suit-heart.svg" style="width:20px;aspect-ratio: 1;display: inline-block;margin-right: 10px;" />
                <h3 style="margin-top: 3px;margin-bottom: 5px;display: inline-block;" onclick="window.location='wishlist.php';">WishList</h3>
            </div> -->

            <div style="text-align: end;">
                <?php
                if (isset($_SESSION["user"])) {
                ?>
                    <button class="s" onclick="logout()">Log Out</button>
                <?php
                } else {
                ?>
                    <button class="s" onclick="window.location='login And Register.php'">Log In</button>
                <?php
                }
                ?>



            </div>



        </div>
    </div>