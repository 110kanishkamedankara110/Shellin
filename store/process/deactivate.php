<?php
    require "database.php";

    Database::iud("UPDATE `product` SET `status_stat_id`='".$_POST["stat"]."'  WHERE `product`.`product_id`='".$_POST["id"]."' ");


?>