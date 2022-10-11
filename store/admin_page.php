<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>SHELLIN | Admin Pannel</title>
    <link rel="stylesheet" href="style_admin.css" />

    <link rel="icon" href="../about/icon/icon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php

require "process/database.php";
require "process/Encript.php";
$rp = Database::s("SELECT DISTINCT(`invoice_id`) FROM `invoice` WHERE `order_status`='Pending'");
$nrp = $rp->num_rows;
$e=new Encript();
$r = Database::s("SELECT DISTINCT(`invoice_id`) FROM `invoice`");
$nr = $r->num_rows;

$presen = ($nrp / $nr) * 100;
if (!isset($_SESSION["admin"])) {
?>
    <script>
        window.location = 'admin_signin.php';
    </script>
<?php
}

?>

<body style="box-sizing: border-box; background-repeat: no-repeat; background-size: cover;background-attachment: fixed;background-image: url('images/colorful_macos_big_sur_apple-wallpaper-1366x768.jpg');">

    <div class="pop" id="pop-4" >
        <div class="pop-body">
            <div class="pop-top">
                <div class="clo" onclick="document.getElementById('pop-4').style.display='none';document.getElementById('bod').style.overflowY='auto';"></div>
            </div>
            <h1>Admin : <?php echo  $e->decrypt($_SESSION["admin"]["admin_email"])?></h1>
                
                <!-- <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  white;width: 80%;margin-bottom: 10px;" placeholder="Title" id="title" /> <span style="color:rgb(50,53,50)"> : Email </span><br /> -->
                <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  white;width: 80%;margin-bottom: 10px;" placeholder="" id="title" /> <span style="color:rgb(50,53,50)"> : Password  </span><br />
                <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  white;width: 80%;margin-bottom: 10px;" placeholder="" id="title" /> <span style="color:rgb(50,53,50)"> : Retype Password </span><br />

                <button class="b" style="background-color: tomato;color:white" onclick="Aduppassword()">Update</button>
             


        </div>

    </div>

    <div class="more-but" id="menu-but" onclick="showMenu();">

    </div>
    <div class="more" id="menu">
        <div style="margin-left: 100px;text-align: center;" id="men">
            <h1>Menu</h1>
            <p style="text-align:start;">Admin</p>

            <!-- <button class="b" style="background-color: rgba(5, 147, 255, 0.759);color: white;" onclick="document.getElementById('pop-4').style.display='grid'">Edit Profile</button> -->

            <button class="b" style="background-color: tomato;color:white" onclick="adLogo()">Logout</button>

        </div>
    </div>





    <div class="admin-page">
        <div class="menu">
            <h1>Admin Pannel</h1>

            <div class="manage-card">

            </div>
            <div class="manage-card">

            </div>
            <div class="manage-card">

            </div>
            <div class="pichart" style="display: inline-block;">
                <div class="u-pi" style="background-image: conic-gradient( teal 0 <?php echo ceil($presen) ?>% ,white <?php echo ceil($presen) ?>%  100% );">

                </div>
                <div class="key">
                    <div style="width: 20px;height: 20px;background-color: teal;display: inline-block;"></div>
                    <h3 style="display: inline-block;margin-left:10px;">Pending Orders: <?php echo ceil($presen); ?>%</h3><br />


                    <!-- <h3 style="display: inline-block;margin-left:10px;">uncompleted : 70%</h3><br /> -->
                </div>
            </div>
            <button class="b" onclick="window.location='product_listing.php'">List Items</button>
            <button class="b" onclick="window.location='manage_products.php'">Manage Items</button>





        </div>
        <div class="content">
            <div class="manage">
                <div class="mn-i" style="background-image: url('images/users.svg');margin-top: 10px;">

                </div>
                <div class="mn-d">
                    <h1>Users</h1>
                    <hr />
                    <!-- <h4>Veryfied Users : 300 </h4> -->
                    <?php
                    $us = Database::s("SELECT * FROM `user`");
                    $unr = $us->num_rows;
                    ?>
                    <h4>All Users : <?php echo $unr ?></h4>
                    <!-- <hr />
                        <h4>Not Veryfied : 20%</h4>
                        <div class="pi" style=" background-image: conic-gradient( teal 0 20%,rgba(0,0,0,0) 20%);"> -->

                    <!-- </div> -->
                    <!-- <button class="b" style="margin-top: 20px" >Manage</button> -->
                </div>
            </div>
            <div class="manage">
                <div class="mn-i" style="background-image: url('images/profit.svg');margin-top: 10px;">

                </div>
                <div class="mn-d">
                    <h1>Invoice</h1>
                    <hr />
                    <!-- <h4>Total Sellings : Rs. 12000 </h4>
                        <h4>Total Costs : Rs. 60000</h4>
                        <hr />
                        <h4>Profit : 80%</h4>
                        <div class="pi" style=" background-image: conic-gradient( tomato 0 80%,rgba(0,0,0,0) 80%);">
                           
                        </div> -->
                    <button class="b" style="margin-top: 20px" onclick="window.location='purchasedHistory.php'">Manage</button>
                </div>

            </div>

        </div>
    </div>























    <script src="script.js"></script>
</body>

</html>