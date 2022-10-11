<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>SHELLIN | Purchase History</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="../about/icon/icon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body id="bo" class="back-g" style="background-color:#eeeeee;">

    <?php

    require "process/database.php";
    require "process/Encript.php";
    $e = new Encript();
    ?>

    <?php
 
    if (!isset($_SESSION["admin"])) {
    ?>
        <script>
            window.location = 'admin_signin.php';
        </script>
    <?php
    }

    ?>

    <div class="refresh" onclick="window.location.reload();">

    </div>
    <div class="menu-but" id="menu-but" onclick="showMenu();">

    </div>
    <div class="menu" id="menu">
        <div style="margin-left: 100px;text-align: center;" id="men">

            <div style="text-align:start;">
                <h4 style="margin-left: 10px;margin-top: 10px;cursor: pointer;margin-bottom: 10px;"><?php echo $e->decrypt($_SESSION["admin"]["admin_email"])?></h4>
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
                $rowc = Database::s("SELECT COUNT(`product_product_id`) AS `count` FROM `invoice` WHERE `invoice`.`product_product_id`='" . $row["pid"] . "' ");
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
        $inv = Database::s("SELECT DISTINCT(`invoice_id`) FROM `invoice`");
        $nrinv = $inv->num_rows;
        for ($i = 0; $i < $nrinv; $i++) {
            $rowinv = $inv->fetch_assoc();

            $it = Database::s("SELECT * FROM `invoice` INNER JOIN `user` ON `user`.`user_id`=`invoice`.`user_user_id` WHERE `invoice_id`='" . $rowinv["invoice_id"] . "' ");
            $itn = $it->num_rows;

            $val = 0;

            for ($j = 0; $j < $itn; $j++) {
                $itrow = $it->fetch_assoc();
                $val = $val + $itrow["full_price"];
            }
        ?>
            <?php
            if ($itrow['order_status'] == "Finished") {
            ?>
                <div class="card" style="background-color: pink;box-sizing: border-box;border:solid rgb(226, 66, 104) 5px">
                <?php
            } else {
                ?>
                    <div class="card" style="background-color:pink;box-sizing: border-box;">
                    <?php
                }
                    ?>

                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.<?php echo $val ?></span><span class="gf" style="background-color: rgba(255, 255, 255, 0.875);margin-left: 5px;">Items: <?php echo $itn ?></span><br /><br />
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Inv: <?php echo $rowinv["invoice_id"] ?></span><br /><br />
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);"><?php echo $e->decrypt($itrow["user_email"]) ?></span><br /><br />
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);" onclick="updateStat('<?php echo $itrow['order_status'] ?>','<?php echo $rowinv['invoice_id'] ?>')"><?php echo $itrow["order_status"] ?></span><br /><br />

                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);"><?php echo explode(" ", $itrow["time"])[0] ?></span></br></br>
                    <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;" onclick=' window.location = "invoiceAdmin.php?inv=<?php echo $rowinv["invoice_id"] ?>&user=<?php echo $itrow["user_id"] ?>";'>View</span>

                    </div>

                <?php
            }


                ?>










                </div>


















                <script src="script.js"></script>


</body>

</html>