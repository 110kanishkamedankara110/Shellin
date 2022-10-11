<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Store | Home</title>
    <link rel="stylesheet" href="style.css" />
 
    <link rel="icon" href="../about/icon/icon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php

require "process/Encript.php";
require "process/database.php";
require "user_detail.php";





?>
<body id="bo" onload="carSet();pagi('1');" class="back-g" style="background-color:#eeeeee;">



    <div class="head">
        <div class="s-d"> <input type="text" placeholder="Search" style="display: in;" id="se" class="search" />
            <button class="s" onclick="search();" >Search</button>
            <!-- <button class="s" style="background-color:rgba(255,255,255,0);border:solid rgb(226, 66, 104) 2px;color:rgb(226, 66, 104);" onclick="search();" id="search">Advanced</button> -->
        </div>
        <!-- <div class="l-d">
            <div class="logo" onclick="window.location='index.php'" style="color:rgb(226, 66, 104);">SHELLIN</div>
        </div> -->

    </div>

    <div class="refresh" onclick="window.location.reload();">

    </div>
    <div class="menu-but" id="menu-but" onclick="showMenu();">

    </div>
    <?php require "menu.php" ?>
    <div class="carosel" id="car">


        <div class="car-div1" id="imm">

            <div class="c-b">

                <div class="b-d" onclick="change('0');" id="c0"></div>
                <div class="b-d" onclick="change('1');" id="c1"></div>
                <div class="b-d" onclick="change('2');" id="c2"></div>
                <div class="b-d" onclick="change('3');" id="c3"></div>
                <div class="b-d" onclick="change('4');" id="c4"></div>




            </div>
        </div>

        <div class="car-div2">

            <?php

            $res2 = Database::s("SELECT  * FROM `product` WHERE `status_stat_id`='1' ORDER BY `date` DESC  LIMIT 5 ");
            $num2 = $res2->num_rows;
            for ($i = 0; $i < $num2; $i++) {
                $row2 = $res2->fetch_assoc();
                $imres2 = Database::s("SELECT * FROM `images` WHERE `images`.`product_product_id`='" . $row2["product_id"] . "' LIMIT 1 ");
                $rowim2 = $imres2->fetch_assoc(); 
                ?>

                <div class="new-itm" onclick="singleView('<?php echo $row2['product_id'] ?>')">
                    <div class="new-im" style="background-image: url('<?php echo $rowim2["url"] ?>');">
                        <span class="gf">New</span>

                    </div>
                    <div class="new-des">

                        <h5 style="margin: 0;"><?php echo $row2["product_name"] ?></h5><br />
                        <div style="text-align:start;">
                            <span><?php echo $row2["product_price"] . "," . $row2["product_color"] ?></span>

                        </div>
                    </div>
                </div>

            <?php
            }
            ?>







        </div>

    </div>
    <div style="margin-top: 20px"></div>
    <!-- <label id="sp" for="sp" onclick="onli();" style="margin-left:10px ;color: rgb(226, 66, 104);padding:10px;border:solid rgb(226, 66, 104) 2px;width: fit-content;margin-top: 20px;">Select : ALL </label>
    <div id="spa" class="spa2">
        <div id="h" class="h2">
            <p class="ho" style="margin: 5px;padding: 10px;" onclick="setcat2('All')">All</p>
            <p class="ho" style="margin: 5px;padding: 10px;" onclick="setcat2('S')">S (UK 8)</p>
            <p class="ho" style="margin: 5px;padding: 10px;" onclick="setcat2('M')">M (UK 10)</p>
            <p class="ho" style="margin: 5px;padding: 10px;" onclick="setcat2('XL')">L (UK 12)</p>
            <p class="ho" style="margin: 5px;padding: 10px;" onclick="setcat2('XL')">XL (UK 14)</p>

            <p class="ho" style="margin: 5px;padding: 10px;" onclick="setcat2('XXL')">XXL (UK 16)</p>
        </div>

    </div> -->
    <div id="res">
        










    </div>
            <div style="width:100%;height:fit-content;background-color:pink;text-align: center;padding: 20px;box-sizing: border-box;">
            <p style="margin:2px;"> All Rights Reserved &copy; DynamicBiz 2022</p>
                <!-- <img src="" style="width:50px;height:50px;"/> -->
            </div>



    <script src="script.js"></script>


</body>

</html>