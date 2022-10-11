<?php

require "database.php";
require "date.php";

$title = $_POST["title"];
$price = $_POST["price"];

$color = $_POST["color"];
$des = $_POST["des"];

$images = $_POST["images"];

if (empty($title)) {
    echo "Enter The Prduct Title";
} else if (empty($price)) {
    echo "Enter Product Price";
} else if (empty($color)) {
    echo "Enter Product Color";
} else if (empty($des)) {
    echo "Describe Your Product";
} else {
    $id = uniqid();
    Database::iud("INSERT INTO `product` (`product_id`,`product_name`,`product_price`,`product_description`,`product_color`,`status_stat_id`,`date`) VALUES ('" . $id . "','" . $title . "','" . $price . "','" . $des . "','" . $color . "','1','".Date::getDate()."');");

    for ($i = 1; $i <= $images; $i++) {

        $from = $_FILES["img" . $i]["tmp_name"];
        $url =  "Products/".uniqid().$_FILES["img" . $i]["name"];
        $to = "../".$url;
       

        
        move_uploaded_file($from, $to);
        $imid = uniqid();
        Database::iud("INSERT INTO `images` (`image_id`,`url`,`product_product_id`) VALUES ('" . $imid . "','" . $url . "','" . $id . "');");
    }
    echo "sucess";
}
