<?php

require "database.php";



Database::iud("UPDATE `cart_products` SET `size`='" . $_POST["size"] . "' WHERE `cart_products_id`='" . $_POST["id"] . "'");
