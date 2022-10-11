<?php
require "database.php";

Database::iud("UPDATE `invoice` SET `order_status`='".$_POST["stat"]."' WHERE `invoice_id`='".$_POST["id"]."' ");




?>