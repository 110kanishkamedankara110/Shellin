<?php
require "database.php";
if(!empty($_POST["price"])){
    Database::iud("UPDATE `product` SET `product_price`='".$_POST['price']."' WHERE `product_id`='".$_POST['id']."' ");

}



?>