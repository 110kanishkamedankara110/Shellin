<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php

if(isset($_SESSION["admin"])){
    ?>
    <script>
        window.location="admin_page.php"
    </script>
    <?php
}

?>
<head>
<title>SHELLIN | Admin Login</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="../about/icon/icon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="bg-div" style="background-image: url('images/background.png');">

    </div>
    <div class="contain-div">
        <div class="img-div" style="background-image: url('images/background.png');">

        </div>
        <div class="m-div">
            <div class="des-div" style="display: flex;align-items:center;justify-content:center">
                <div style="text-align: center;width: 100%;">
                    <h1>Admin LogIn</h1>
                    <input style="width: 80%;border-radius: 10px;border:none;text-align: center;height: 30px;" type="text" placeholder="Email" id="ad_log_em" /><br /><br />
                    <input style="width: 80%;border-radius: 10px;border:none;text-align: center;height: 30px;" type="password" placeholder="Password" id="ad_log_pw" /><br /><br />
                   
                    <p id="err" style="background-color: tomato;color:white"></p>
                    <button class="bu" onclick="adminLogin()">LogIn</button><br />
                </div>












            </div>
        </div>
    </div>








    <div class="back" id="back" onclick="history.back()">

    </div>

    <script src="script.js"></script>


</body>

</html>