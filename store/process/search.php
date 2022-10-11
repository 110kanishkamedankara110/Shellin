<div class="main-div" id="main" style="margin-top: 20px;">

    <?php
    require "database.php";
    $keyword = $_POST["key"];
    $res = Database::s("SELECT  * FROM `product` WHERE `status_stat_id`='1' AND `product_name` LIKE '%".$keyword."%'  ORDER BY `date` DESC ");
    $num = $res->num_rows;
if ($num>0) {
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
}else{

    ?>
        <h3 style="text-align: center;">Sorry No Results Found</h3>
    <?php
}
    ?>







</div><br /><br />