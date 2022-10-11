<?php
 session_start();
if (isset($_SESSION['user'])) {
    require "database.php";
    require "date.php";

    $r = Database::s("SELECT * FROM `address` WHERE `user_user_id`='" . $_SESSION['user']['user_id'] . "' ");
    $nr = $r->num_rows;
    if ($nr == 0) {
        echo "no address";
    } else {
       

        $user = $_SESSION["user"]["user_id"];
        $product = $_POST["product_id"];



        $cartpro = Database::s("SELECT * FROM  `product`  WHERE `product_id`='" . $product . "';");

        $inv_id = uniqid();
        $date = date::getdate();
        $qty = $_POST["qty"];


        $row = $cartpro->fetch_assoc();

        $unit_price = $row["product_price"];
        $full_price = $qty * $unit_price;


        Database::iud("INSERT INTO `invoice` (`invoice_id`,`buy_qty`,`full_price`,`product_product_id`,`user_user_id`,`time`,`unit_price`,`size`) VALUES ('" . $inv_id . "','" . $qty . "','" . $full_price . "','" . $product . "','" . $user . "','" . $date . "','" . $unit_price . "','".$_POST["size"]."')  ");
        echo $inv_id;
    }
} else {
    echo "no session";
}
