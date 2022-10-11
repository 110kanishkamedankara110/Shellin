<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Store | Cart</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="../about/icon/icon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php

require "process/Encript.php";
require "process/database.php";


require "user_detail.php";



if (!isset($_SESSION["user"])) {
    header("location:login And Register.php");
} else {
    $res2 = Database::s("SELECT * FROM `cart_products` INNER JOIN `cart` ON `cart_products`.`cart_cart_id`=`cart`.`cart_id` INNER JOIN `product` ON `cart_products`.`product_product_id`=`product`.`product_id` WHERE `cart`.`user_user_id`='" . $_SESSION["user"]["user_id"] . "'");
    $nr2 = $res2->num_rows;
    $fullval = 0;
    for ($i = 0; $i < $nr2; $i++) {
        $row2 = $res2->fetch_assoc();
        $fullval = $fullval + ($row2['product_qty'] * $row2['product_price']);
    }
?>

    <body onload="reload();" id="bo" class="back-g" onload="carSet();" style="background-color:#eeeeee;">




        <div class="refresh" onclick="window.location.reload();">

        </div>
        <div class="menu-but" id="menu-but" onclick="showMenu();">

        </div>

        <?php
        require "menu.php";
        ?>


        <div class="cartdiv">
            <div class="cardiv1" style="background-color:  rgba(233, 70, 97, 0.476);border-radius: 10px;">
                <hr />
                <h1 style="color:white;text-align:center">Cart</h1>
                <hr />
                <div style="width:100%;">
                    <table style="width:80%;color: white;text-align:end;">
                        <tr>
                            <td>
                                <h3>No Of Items : </h3>
                            </td>
                            <td>
                                <h3><?php echo $nr2 ?></h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Sub-Total : </h3>
                            </td>
                            <td>
                                <h3><?php echo $fullval ?> Rs </h3>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <hr />

                            </td>

                        </tr>

                        <tr>
                            <td>

                                <b>
                                    <h1>Total : </h1>
                                </b>
                            </td>
                            <td>
                                <b>
                                    <h1><?php echo $fullval ?> Rs </h1>
                                </b>
                            </td>
                        </tr>

                    </table>
                    <hr />
                    <hr />
                    <button style="width:80%;margin-left:10%;margin-top:10px;" class="b" onclick="Cartcheckout();" <?php if ($nr2 == 0) {
                                                                                                                        echo 'disabled';
                                                                                                                    } ?>>Checkout</button>
                </div>
            </div>
            <div class="cardiv2">
                <div class="main-div" id="main">
                    <?php
                    $res = Database::s("SELECT * FROM `cart_products` INNER JOIN `cart` ON `cart_products`.`cart_cart_id`=`cart`.`cart_id` INNER JOIN `product` ON `cart_products`.`product_product_id`=`product`.`product_id` WHERE `cart`.`user_user_id`='" . $_SESSION["user"]["user_id"] . "'");
                    $nr = $res->num_rows;

                    if ($nr > 0) {
                        for ($i = 0; $i < $nr; $i++) {
                            $row = $res->fetch_assoc();
                            $imres2 = Database::s("SELECT * FROM `images` WHERE `images`.`product_product_id`='" . $row["product_id"] . "' LIMIT 1 ");
                            $rowim2 = $imres2->fetch_assoc();
                    ?>

                            <div class="card" style="background-image: url('<?php echo $rowim2["url"] ?>')">
                                <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);"><?php echo $row["product_price"] ?></span><br /><br />


                                <input type="number" id="qty" onchange="ediqty('<?php echo $row['cart_products_id'] ?>');" value="<?php echo $row["product_qty"] ?>" min=1 style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />
                                <select id="size" onchange="updateSize('<?php echo $row['cart_products_id'] ?>')">
                                    <option value="select">Select</option>
                                    <?php
                                    if ($row["size"] == "S (UK 8)") {
                                    ?>
                                        <option selected>S (UK 8)</option>
                                        <option>M (UK 10)</option>
                                        <option>L (UK 12)</option>
                                        <option>XL (UK 14)</option>
                                        <option>XXL (UK 16)</option>
                                    <?php

                                    } else if ($row["size"] == "M (UK 10)") {

                                    ?>
                                        <option >S (UK 8)</option>
                                        <option selected>M (UK 10)</option>
                                        <option>L (UK 12)</option>
                                        <option>XL (UK 14)</option>
                                        <option>XXL (UK 16)</option>
                                    <?php
                                    } else if ($row["size"] == "L (UK 12)") {
                                    ?>
                                        <option>S (UK 8)</option>
                                        <option>M (UK 10)</option>
                                        <option selected>L (UK 12)</option>
                                        <option>XL (UK 14)</option>
                                        <option>XXL (UK 16)</option>
                                    <?php

                                    } else if ($row["size"] == "XL (UK 14)") {
                                    ?>
                                        <option>S (UK 8)</option>
                                        <option>M (UK 10)</option>
                                        <option>L (UK 12)</option>
                                        <option selected>XL (UK 14)</option>
                                        <option>XXL (UK 16)</option>
                                    <?php

                                    } else if ($row["size"] == "XXL (UK 8)") {
                                    ?>
                                        <option>S (UK 8)</option>
                                        <option>M (UK 10)</option>
                                        <option>L (UK 12)</option>
                                        <option>XL (UK 14)</option>
                                        <option selected>XXL (UK 16)</option>
                                    <?php

                                    }

                                    ?>

                                </select>
                                <span class="b" onclick="rem('<?php echo $row['cart_products_id'] ?>');" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 120px;">Remove</span>

                            </div>
                    <?php


                        }
                    }


                    ?>







                </div>
            </div>


        </div>


















        <script src="script.js"></script>


    </body>

</html>
<?php
}
?>