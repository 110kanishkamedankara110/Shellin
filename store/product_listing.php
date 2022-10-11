<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Store | Add Product</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="../about/icon/icon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
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
    <div class="carosel" style="display:grid" id="car">

        <div id="imm">
            <input id="img1" onchange="img1();" type="file" style="display:none;">
            <input id="img2" onchange="img2();" type="file" style="display:none;">
            <input id="img3" onchange="img3();" type="file" style="display:none;">
            <input id="img4" onchange="img4();" type="file" style="display:none;">
            <div class="carosel" style="display:grid">
                <div id="imm2" class="iii" style="background-size: cover;background-position: center;background-repeat:no-repeat ; border: solid rgb(106 117 117) 2px;box-sizing:border-box ;border-radius: 20px;background-image: url('images/plus gray.svg');">


                </div>

                <div class="car-div2">

                    <label for="img1" id="i1" class="new-itm iii" style="background-size: cover; background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;background-image: url('images/plus gray.svg');">


                    </label>


                    <label for="img2" id="i2" class="new-itm iii" style=" display:none;background-size: cover;background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;background-image: url('images/plus gray.svg');">

                    </label>


                    <label for="img3" id="i3" class="new-itm iii" style=" display:none;background-size: cover;background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;background-image: url('images/plus gray.svg');">

                    </label>

                    <label for="img4" id="i4" class="new-itm iii" style=" display:none;background-size: cover;background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;background-image: url('images/plus gray.svg');">

                    </label>








                </div>
            </div>
        </div>

        <div class="car-div2">
            <h1 style="color:rgb(50,53,50)">List a Item</h1>
            <hr />
            <p style="text-align:center;color:rgb(50,53,50);">Main</p>
            <hr /><br />
            <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  white;width: 80%;margin-bottom: 10px;" placeholder="Title" id="title" /> <span style="color:rgb(50,53,50)"> : Title </span><br />
            <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color: white;width: 80%;margin-bottom: 10px;" placeholder="Price" id="price" /> <span style="color:rgb(50,53,50)"> : Price </span><br />

            <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color: white;width: 80%;margin-bottom: 10px;" placeholder="Color" id="color" /> <span style="color:rgb(50,53,50)"> : Color </span><br />





            <hr />
            <p style="text-align:center;color:rgb(50,53,50);">Description</p>
            <hr /><br />
            <div style="box-sizing: border-box ;border:solid 1px rgb(106 117 117);border-radius: 5px;background-color:  white;width:100%;height: 200px;">
                <textarea id="des" style="color:rgb(106 117 117);border: none;border-radius: 5px;width: 100%;height:100%;padding: 10px;background-color:  white;box-sizing: border-box;"></textarea>
            </div>
            <hr />

            <button class="s" style="border-radius: 5px;" id="addimg" onclick="list()">List</button>

        </div>
















    </div>
    <div style="margin-top: 60px"></div>
    <br /><br /><br />
    <div class="main-div" id="main" style="margin-top: 20px;">
        <?php
        require "process/database.php";
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

                <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 50px;" onclick="update('<?php echo $row['product_id']  ?>');">Update</span>


            </div>
        <?php
        }
        ?>



















    </div>


















    <script src="script.js"></script>


</body>

</html>