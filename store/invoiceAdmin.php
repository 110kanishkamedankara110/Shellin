<?php
session_start();
$invoice_id = $_GET["inv"];
require "process/database.php";
$r = Database::s("SELECT * FROM `invoice` INNER JOIN `product` ON `product`.`product_id`=`invoice`.`product_product_id` WHERE `invoice_id`='" . $invoice_id . "'");
$nr = $r->num_rows;


$rad = Database::s("SELECT * FROM `address` WHERE `user_user_id`='" . $_GET["user"]. "' ");


$nrad = $rad->num_rows;
// echo $nrad;
$nrow=$rad->fetch_assoc();

$ur=Database::s("SELECT * FROM `user` WHERE `user_id`='".$_GET["user"]."'");
$user=$ur->fetch_assoc();
require "process/Encript.php";
$e=new Encript();

?>


<!DOCTYPE html>
<html>

<head>
    <title>SHELLIN | Invoice</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="../about/icon/icon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body >




    <div style="padding: 20px;box-sizing: border-box; background-image:url('');background-repeat: no-repeat;background-position: center;width:100%;height: 100%;position:absolute;background-size: contain;overflow-y: auto;overflow-x: auto;display: flex;">
        <div class="inv" id="inv">
            <div class="invlog">

            </div>
            <h1 style="font-family: 'hacker';letter-spacing: 2px;">Invoice</h1>

            <p style="font-family: 'hacker';letter-spacing: 2px;text-align: center;font-size:20px;"> Invoice Id : <?php echo $_GET["inv"] ?></p>
            <p style="font-family: 'hacker';letter-spacing: 2px;text-align: left;font-size:20px;"> Address : <?php echo $nrow["address"] ?> </p>
            <p style="font-family: 'hacker';letter-spacing: 2px;text-align: left;font-size:20px;"> User : <?php echo $e->decrypt($user["user_email"]) ?> </p>

           
            <table style="text-align:center;width: 100%;margin-top: 100px;white-space:wrap;margin-bottom: 100px;">
                <tr>
                    <td colspan="6">
                        <hr />
                    </td>
                </tr>
                <tr>
                    <th style="font-family: 'hacker';letter-spacing: 2px;;">No</th>
                    <th style="font-family: 'hacker';letter-spacing: 2px;">Product</th>
                    <th style="font-family: 'hacker';letter-spacing: 2px;">Unit Price</th>
                    <th style="font-family: 'hacker';letter-spacing: 2px;">Size</th>
                    <th style="font-family: 'hacker';letter-spacing: 2px;">Qty</th>
                    <th style="font-family: 'hacker';letter-spacing: 2px;">Price</th>

                </tr>
                <tr>
                    <td colspan="6">
                        <hr />
                    </td>
                </tr>



                <?php
                $tot=0;
                for ($i = 1; $i <= $nr; $i++) {
                    $row = $r->fetch_assoc();
                    $tot = $tot + $row["full_price"];
                ?>
                    <tr>
                        <td style="font-family: 'hacker';letter-spacing: 2px;;"><?php echo $i ?></td>
                        <td style="font-family: 'hacker';letter-spacing: 2px;"><?php echo $row["product_name"] ?></td>
                        <td style="font-family: 'hacker';letter-spacing: 2px;"><?php echo $row["unit_price"] . " Rs" ?></td>
                        <td style="font-family: 'hacker';letter-spacing: 2px;"><?php echo $row["size"] ?></td>
                        <td style="font-family: 'hacker';letter-spacing: 2px;"><?php echo $row["buy_qty"] ?></td>
                        <td style="font-family: 'hacker';letter-spacing: 2px;"><?php echo $row["full_price"] ?> Rs</td>

                    </tr>


                <?php

                }
                ?>




                <tr>
                    <td colspan="6">
                        <hr />
                    </td>
                </tr>
                <tr>
                    

                </tr>
                <tr>
                    <td colspan="6">
                        <hr />
                    </td>
                </tr>
                <tr>
                    <td style="font-family: 'hacker';letter-spacing: 2px;" colspan="5">
                        <h1 style="font-family: 'hacker';letter-spacing: 2px;">Total</h1>
                    </td>
                    <td style="font-family: 'hacker';letter-spacing: 2px;;">
                        <h1 style="font-family: 'hacker';letter-spacing: 2px;"><?php echo $tot ?> Rs</h1>
                    </td>

                </tr>
                <tr>
                    <td style="font-family: 'hacker';letter-spacing: 2px;" colspan="5">
                        <h1 style="font-family: 'hacker';letter-spacing: 2px;font-size: 20px;">Status</h1>
                    </td>
                    <td style="font-family: 'hacker';letter-spacing: 2px;;">
                        <h1 style="font-family: 'hacker';letter-spacing: 2px;font-size: 20px"><?php echo $row["order_status"] ?></h1>
                    </td>

                </tr>
                <tr>
                    <td colspan="6">
                        <hr />
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <hr />
                    </td>
                </tr>
            </table>
            <p style="font-family: 'hacker';letter-spacing: 2px;text-align: center;font-size: smaller;margin: 0;">This is a computer generated invoice</p>
            <p style="font-family: 'hacker';letter-spacing: 2px;text-align: center;font-size: smaller;margin: 0;margin-bottom: 10px;">SHELLIN 2022 &copy;</p>
        </div>
    </div>










    <div class="back" id="back" onclick="history.back()">

    </div>

    <script src="script.js"></script>
    <script src="htmltocanvas.js"></script>
    <script>saveimg('<?php echo $_GET["user"].$invoice_id ?>')</script>

</body>

</html>