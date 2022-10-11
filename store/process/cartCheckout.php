<?php
session_start();
require "database.php";
require "date.php";





if (isset($_SESSION['user'])) {
    $r = Database::s("SELECT * FROM `address` WHERE `user_user_id`='" . $_SESSION['user']['user_id'] . "' ");
    $nr = $r->num_rows;
    if ($nr == 0) {
        echo "no address";
    } else {
        $user = $_SESSION["user"]["user_id"];


        $r = database::s("SELECT * FROM `cart` WHERE `user_user_id`='" . $user . "'");
        $row = $r->fetch_assoc();

        $cart_id = $row["cart_id"];

        $cartpro = Database::s("SELECT * FROM `cart_products` INNER JOIN `product` ON `cart_products`.`product_product_id`=`product`.`product_id` WHERE `cart_products`.`cart_cart_id`='" . $cart_id . "'");
        $nr = $cartpro->num_rows;

        $inv_id = uniqid();
        $date = date::getdate();

        for ($i = 0; $i < $nr; $i++) {
            $row = $cartpro->fetch_assoc();
            $qty = $row["product_qty"];
            $unit_price = $row["product_price"];
            $full_price = $qty * $unit_price;
            $product = $row["product_product_id"];

            Database::iud("INSERT INTO `invoice` (`invoice_id`,`buy_qty`,`full_price`,`product_product_id`,`user_user_id`,`time`,`unit_price`,`size`) VALUES ('" . $inv_id . "','" . $qty . "','" . $full_price . "','" . $product . "','" . $user . "','" . $date . "','" . $unit_price . "','".$row['size']."')  ");
        }
        Database::iud("DELETE FROM `cart_products` WHERE `cart_cart_id`='" . $cart_id . "'");
        echo $inv_id;
    }
} else {
    echo "no session";
}
