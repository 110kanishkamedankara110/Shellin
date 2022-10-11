<?php
session_start();
require "database.php";

$r = Database::s("SELECT * FROM `address` WHERE `user_user_id`='" . $_SESSION['user']['user_id'] . "' ");
$nr = $r->num_rows;
if ($nr==0) {
    Database::iud("INSERT INTO `address` (`address`,`user_user_id`) VALUES ('".$_POST["address"]."','".$_POST["user_id"]."')");
}else{
    Database::iud("UPDATE `address` SET `address`='".$_POST["address"]."' WHERE `user_user_id`='".$_POST["user_id"]."' ");
}
