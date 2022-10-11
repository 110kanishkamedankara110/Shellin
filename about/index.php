<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="icon/icon.svg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
</head>

<body class="body-light" onload="header();the()" id="bod" onscroll="scro();scro2();">
    <?php
  
    require "heder.php";
    
    ?>
    <!-- <hr style="background-color:  rgb(226, 66, 104);" /> -->
    <div class="main">
        <?php
          require "popup.php";
        ?>
        <div class="main1-light" id="m1">
            <div class="i i1" id="i1"></div>
            <!-- <div class="i i2" id="i2"></div>
            <div class="i i3" id="i3"></div>
            <div class="i i4" id="i4"></div>
            <div class="i i5" id="i5"></div>
            <div class="i i6" id="i6"></div> -->
        </div>
        <div class="main2" id="m2" style="margin-top:10px;padding:20px;box-sizing: border-box;color: #eeeeee;">
            <!-- <h1 style="font-size:60px;margin: 0;" class="pk">SHELLIN</h1> -->
            <img class="br-log" src="icon/shellin logo.min.svg" width="100%" height="200px" />

            <hr />
            <list>
                <ul style="text-align: center;">
                    <li style="display: inline-block;">
                        <h1>WELCOME</h1>
                    </li>



                </ul>
            </list>
            <hr />
            
            <a href="https://www.facebook.com/shellin.clothing" target="_blank">
                <div class="tw-light" id="tw" style="padding:10px;"></div>
            </a>
            <a href="https://www.instagram.com/shellin.clothing/" target="_blank">
                <div class="ig-light" id="ig" style="padding:10px;"></div>
            </a>
            
            <!-- <button id="b2" onclick="" class="b1-light">Contact Us</button>
            <button id="b3" onclick="" class="b1-light">Contact Us</button>
            <button id="b4" onclick="" class="b1-light">Contact Us</button>
            <button id="b5" onclick="" class="b1-light">Contact Us</button>
            <button id="b6" onclick="" class="b1-light">Contact Us</button>
            <button id="b7" onclick="" class="b1-light">Contact Us</button> -->
          
            <hr />
            <list>
                <ul style="display: inline-block;text-align: center;">
                    <li style="display: inline-block;cursor: pointer;" onclick="document.getElementById('pop-1').style.display='grid';document.getElementById('bod').style.overflowY='hidden';">Size Guide | </li>
                    <li style="display: inline-block;cursor: pointer;" onclick="document.getElementById('pop-2').style.display='grid';document.getElementById('bod').style.overflowY='hidden';">Terms & Conditions | </li>
                    <li style="display: inline-block;cursor: pointer;" onclick="document.getElementById('pop-3').style.display='grid';document.getElementById('bod').style.overflowY='hidden';">Delivery Policy | </li>
                    <!-- <li style="display: inline-block;cursor: pointer;" onclick="document.getElementById('pop-4').style.display='grid';document.getElementById('bod').style.overflowY='hidden';">Return | </li> -->
                    <li style="display: inline-block;cursor: pointer;" onclick="document.getElementById('pop-5').style.display='grid';document.getElementById('bod').style.overflowY='hidden';">Return & Exchange Policy  </li></br>
  
                    
                    <button id="b1" onclick="window.location='mailto:shellin.brand@gmail.com'" class="b1-light">Contact Us</button>
                </ul>
            </list>
            <hr/>
        </div>

    </div>







    <script src="script.js"></script>
</body>


</html>