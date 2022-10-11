<?php
require "Encript.php";
require "database.php";

$e=new Encript();
$id=uniqid();
// Database::iud("INSERT INTO `admin` VALUES ('".$id."','".$e->encrypt("110kqnishkamedankara110@gmail.com")."','".$e->encrypt("0724886404Was")."')");


?>