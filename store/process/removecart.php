<?php
require "database.php";

Database::iud("DELETE FROM `cart_products` WHERE `cart_products_id`='".$_POST["id"]."'");



?>