<?php
$qty=$_POST["qty"];
require "database.php";
if(empty($qty)){


}else if($qty==0){
    
}else{
    

    Database::iud("UPDATE `cart_products` SET `product_qty`='".$qty."' WHERE `cart_products_id`='".$_POST["id"]."'");
}
