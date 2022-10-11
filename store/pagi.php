<?php
require "process/database.php";
if (!isset($_POST['page'])) {
    $page = 1;
} else {
    $page = $_POST['page'];
}

$resperPage = 20;
$respagi = Database::s("SELECT  * FROM `product` WHERE `status_stat_id`='1' ");
$nr = $respagi->num_rows;
$pages = ceil($nr / $resperPage);
$offset = ($page - 1) * $resperPage;
?>



<div class="main-div" id="main" style="margin-top: 20px;">

    <?php

    $res = Database::s("SELECT  * FROM `product` WHERE `status_stat_id`='1' ORDER BY `date` DESC LIMIT " . $resperPage . " OFFSET " . $offset . "   ");
    $num = $res->num_rows;
    for ($i = 0; $i < $num; $i++) {
        $row = $res->fetch_assoc();
        $imres = Database::s("SELECT * FROM `images` WHERE `images`.`product_product_id`='" . $row["product_id"] . "' LIMIT 1 ");
        $rowim = $imres->fetch_assoc();
    ?>
        <div class="card" style="background-image: url('<?php echo $rowim["url"] ?>')" onclick="singleView('<?php echo $row['product_id'] ?>')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);padding:5px;"><?php echo $row["product_price"] ?></span>
            <button class="b" id="d" ><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button>
            <!-- <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button> -->
        </div>

    <?php
    }

    ?>







</div><br /><br />
<div class="pagi">

    <?php
    if ($page == 1) {
    } else {
    ?>
        <button class="pagi-but" onclick="pagi('<?php echo $page-1?>')"><img src="images/prev.png"></button>
        <?php
    }
    for ($i = 1; $i <= $pages; $i++) {
        if ($i == $page) {
        ?>
            <button onclick="pagi('<?php echo $i?>')" class="pagi-but" style="background-color:  rgb(226, 66, 104);color: #eeeeee;border-color: #eeeeee;"><?php echo $i ?></button>
        <?php
        } else {
        ?>
            <button onclick="pagi('<?php echo $i?>')" class="pagi-but"><?php echo $i ?></button>
        <?php
        }
    }
    if ($page == $pages) {
    } else {
        ?>
        <button class="pagi-but" onclick="pagi('<?php echo $page+1?>')"><img src="images/nex.png"></button>

    <?php
    }
    ?>


</div><br /><br />