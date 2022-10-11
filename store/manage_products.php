<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>SHELLIN | Manage Product</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="../about/icon/icon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<?php
require "process/database.php";

?>
<?php

if( !isset($_SESSION["admin"])){
    ?>
    <script>
        window.location='admin_signin.php';
    </script>
    <?php
}

?>

<body id="bo" class="back-g" style="background-color:#eeeeee;">

   


    <div class="refresh" onclick="window.location.reload();">

    </div>
    <div class="menu-but" id="menu-but" onclick="showMenu();">

    </div>
    <div class="menu" id="menu">
        <div style="margin-left: 100px;text-align: center;" id="men">

            <div style="text-align:start;">
                <h4 style="margin-left: 10px;margin-top: 10px;cursor: pointer;margin-bottom: 10px;">Kanishka</h4>
            </div>
            <div style="text-align:start;">
                <span style="margin-left: 10px;margin-top: 10px;cursor: pointer;" class="user" onclick="window.location='admin_page.php'">Admin Pannel</span>
            </div>






            <div style="text-align: end;">

                <button class="s" onclick="adLogo()">Log Out</button>


            </div>



        </div>
    </div>
    <div class="carosel" style="width: 100%;" id="car">


        <div id="imm">

            <h2 style="color:black;">Most Sold</h2>
            <div class="main-div" id="main" style="margin-top: 20px;height: 400px;">
                <?php
                $rs = Database::s("SELECT MAX(`product_product_id`) AS `pid` FROM `invoice`");
            
                $nr = $rs->num_rows;
                $row = $rs->fetch_assoc();
                $rowc = Database::s("SELECT COUNT(`product_product_id`) AS `count` FROM `invoice` WHERE `invoice`.`product_product_id`='".$row["pid"]."' ");
                $rc = $rowc->fetch_assoc();
                $rp = Database::s("SELECT * FROM `product` INNER JOIN `images` ON `images`.`product_product_id`=`product`.`product_id` WHERE `product_id`='" . $row["pid"] . "'");

                if ($nr > 0) {
                    $row2 = $rp->fetch_assoc();
                ?>
                    <div class="card" style="background-image: url('<?php echo $row2["url"] ?>');box-sizing: border-box;">
                        <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);"><?php echo $row2["product_name"] ?></span>
                        <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);"><?php echo $row2["product_price"] ?></span>
                        <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);"><?php echo $row2["product_color"] ?></span>
                        <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);"><?php echo "Sold : " . $rc["count"] ?></span>


                    </div>
                <?php
                }
                ?>

            </div>












        </div>








    </div>
    <div style="margin-top: 60px"></div>
    

    </div>
    <div class="main-div" id="main" style="margin-top: 20px;">
        <?php
       
        $result = Database::s("SELECT * FROM `product`");
        $nr = $result->num_rows;
        for ($i = 0; $i < $nr; $i++) {
            $row = $result->fetch_assoc();
            $imr = Database::s("SELECT * FROM `images` WHERE `product_product_id`='" . $row["product_id"] . "'");
            $imrow = $imr->fetch_assoc();
        ?>

            <div class="card" style="background-image: url('<?php echo $imrow["url"] ?>');box-sizing: border-box;">
                <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);"><?php echo $row["product_price"] ?></span>
                <div class="gf" style="margin-bottom:10px;border: solid white 3px;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('<?php echo $i ?>','<?php echo $row['product_id'] ?>','<?php echo $row['status_stat_id'] ?>')">
                    <?php
                    if ($row['status_stat_id'] == 1) {
                    ?>
                        <div class="gf" id="ac<?php echo $i ?>" style="width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                        </div>
                    <?php

                    } else {
                    ?>

                        <div class="gf" id="ac<?php echo $i ?>" style="width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color:tomato;margin-left:20px">

                        </div>
                    <?php
                    }
                    ?>

                </div>
                <input type="text" id="<?php echo 'but'.$row['product_id'] ?>" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="Price" /> <span style="color:white"> : Price </span><br />

                <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 100px;" onclick="update('<?php echo $row['product_id']  ?>');">Update</span>


            </div>
        <?php
        }
        ?>



















    </div>


















    <script src="script.js"></script>


</body>

</html>