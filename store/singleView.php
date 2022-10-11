<?php
session_start();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>SHELLIN </title>
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="../about/icon/icon.svg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <?php

require "process/Encript.php";
require "process/database.php";
require "user_detail.php";


if (isset($_GET["id"])) {
    $res = Database::s("SELECT  * FROM `product` WHERE `product_id`='" . $_GET["id"] . "'; ");
    $row = $res->fetch_assoc();
    $imres = Database::s("SELECT * FROM `images` WHERE `images`.`product_product_id`='" . $row["product_id"] . "' LIMIT 1 ");
    $rowim = $imres->fetch_assoc();

?>
    <body>

        <div class="bg-div" style="background-image: url('<?php echo  $rowim['url'] ?>');">

        </div>
        <div class="contain-div">
            <div class="img-div" style="background-image: url('<?php echo  $rowim['url'] ?>');">

            </div>
            <div class="m-div">
                <div class="des-div">
                    <div style="text-align: center;">
                        <h1><?php echo  $row['product_name'] ?></h1>
                    </div>
                    <h3 class="price">Price: <?php echo  $row['product_price'] ?></h3>
                    <h3 class="price">Color: <?php echo  $row['product_color'] ?></h3>
                    <div>
                        <!-- <input type="number" style="padding:5px;border: none;border-radius: 5px;background-color:  rgba(255, 255, 255,0.7);width:50px;margin-bottom: 10px;" min="1" placeholder="qty" value="1" /> <span style="color:white"> : Quantity </span><br /> -->
                        <input type="number" value="1" min="1" id="qty" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 30%;margin-bottom: 10px;" placeholder="" /> <span style="color:white"> : Quantity </span><br />
                       <select id="size">
                        <option value="select">Select</option>
                        <option>S (UK 8)</option>
                        <option>M (UK 10)</option>
                        <option>L (UK 12)</option>
                        <option>XL (UK 14)</option>
                        <option>XXL (UK 16)</option>
                       </select>
                        <span class="b" id="d" onclick="checkout('<?php echo $_GET['id']; ?>')">Buy</span>
                        <span class="b" id="d" onclick="addcart('<?php echo $_GET['id']; ?>')"><img src="images/cart.svg" style="width:20px;aspect-ratio: 1;display: inline-block;margin-right: 10px;" /></span>
                        <!-- <button class="b" id="d"><img src="images/suit-heart.svg" style="width:20px;aspect-ratio: 1;display: inline-block;margin-right: 10px;" /> </button> -->
                    </div>


                    <h2>Description</h2>
                    <div style="width:100% ;height:200px;overflow-x:auto ; white-space: nowrap;box-sizing: border-box;overflow-y: hidden;">


                        <?php
                        $imres2 = Database::s("SELECT * FROM `images` WHERE `images`.`product_product_id`='" . $_GET["id"] . "'");
                        $nor = $imres2->num_rows;
                        for ($i = 0; $i < $nor; $i++) {
                            $rowim2 = $imres2->fetch_assoc();

                        ?>
                            <div style="display:inline-block;width:200px;height:200px;background-image: url('<?php echo $rowim2["url"] ?>');background-position: center;background-repeat: no-repeat;background-size: cover;box-sizing: border-box;">
                            </div>

                        <?php
                        }
                        ?>


                    </div>
                    <p><?php echo  $row['product_description'] ?></p>





                </div>
            </div>
        </div>








        <div class="back" id="back" onclick="history.back()">

        </div>

        <script src="script.js"></script>


    </body>

    </html>

<?php

} else {
    header("location:index.php");
}

?>