<?php
session_start();
if (!isset($_SESSION["user"])) {
    echo "no";
} else {
    $pro = $_POST["id"];
    $user = $_SESSION["user"]["user_id"];
    $qty = $_POST["qty"];

    $cart_id;
    require "database.php";
    require "date.php";




    $rs = Database::s("SELECT * FROM `cart` WHERE `user_user_id`='" . $user . "'");
    $nr = $rs->num_rows;
   
    $cp = uniqid();
    if ($nr == 0) {

        
        $cart_id = uniqid();


        Database::iud("INSERT INTO `cart` (`cart_id`,`user_user_id`) VALUES('" . $cart_id . "','" . $user . "')");


        Database::iud("INSERT INTO `cart_products` (`cart_products_id`,`cart_cart_id`,`product_product_id`,`product_qty`,`date`) VALUES ('" . $cp . "','" . $cart_id . "','" . $pro . "','" . $qty . "','" . Date::getdate() . "') ");
    } else {
        $cart = $rs->fetch_assoc();
        $cart_id = $cart["cart_id"];
   

        $crs = Database::s("SELECT * FROM `cart_products` INNER JOIN `cart` ON `cart_products`.`cart_cart_id`=`cart`.`cart_id` WHERE `cart`.`user_user_id`='" . $user . "' AND `cart_products`.`product_product_id`= '" . $pro . "' AND `cart_products`.`size`='".$_POST["size"]."'  ");
        $nr = $crs->num_rows;
        if ($nr > 0) {
            $r=$crs->fetch_assoc();
             Database::iud("UPDATE `cart_products` SET `product_qty`='".$qty+$r["product_qty"]."',`date`='".Date::getdate()."' WHERE `cart_cart_id`='".$r["cart_cart_id"]."' AND `product_product_id`='".$pro."' ");   
        } else {
           
            Database::iud("INSERT INTO `cart_products` (`cart_products_id`,`cart_cart_id`,`product_product_id`,`product_qty`,`date`,`size`) VALUES ('" . $cp . "','" . $cart_id . "','" . $pro . "','" . $qty . "','" . Date::getdate() . "','".$_POST["size"]."') ");
        }
    }
}
