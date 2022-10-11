<?php
session_start();
if (isset($_SESSION["user"])) {
    header("location:index.php");
} else {
?>









    <!DOCTYPE html>
    <html>

    <head>
        <title>SHELLIN | Login</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="../about/icon/icon.svg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body id="bo">

        <div class="bg-div" style="background-image: url('images/bg-test2.jpg'); filter: blur(0px);background-size: contain;background-position: left;
    -webkit-filter: blur(0px);">

        </div>
        <div class="log-main">

            <div class="login">
                <div class="signin" id="sd">
                    <div class="sign-div" id="sdn">
                        <h1 style="color:white;">Sign In</h1>
                        <input id="email" style="width: 80%;border-radius: 10px;border:none;text-align: center;height: 30px;" type="text" placeholder="Email" id="email" /><br /><br />
                        <input id="password" style="width: 80%;border-radius: 10px;border:none;text-align: center;height: 30px;" type="password" placeholder="Password" id="password1" /><br /><br />
                        <input id="2ndpassword" style="width: 80%;border-radius: 10px;border:none;text-align: center;height: 30px;" type="password" placeholder="Re Enter Password" id="password2" /><br /><br />
                        <p id="err" style="background-color: tomato;color:white"></p>
                        <button class="bu" onclick="signin();">Sign In</button><br />
                        <button class="bu" onclick="showlogin();">Log In</button>
                    </div>
                    <div id="welcome-login">

                    </div>
                </div>



                <div class="log" id="ld">
                    <div class="login-div" id="ldn">
                        <h1 style="color:white;">Log In</h1>
                        <input id="log_em" style="width: 80%;border-radius: 10px;border:none;text-align: center;height: 30px;" type="text" placeholder="Email" id="loemail" /><br /><br />
                        <input id="log_pw" style="width: 80%;border-radius: 10px;border:none;text-align: center;height: 30px;" type="password" placeholder="Password" id="lopassword" /><br /><br />
                        <p id="err2" style="background-color: tomato;color:white"></p>
                        <button class="bu" onclick="login();">Log In</button><br />
                        <button class="bu" onclick="showsignin();">Sign In</button>
                    </div>
                    <div id="welcome-sign" style="display: none;">

                    </div>
                </div>
            </div>

        </div>















        <script src="script.js"></script>

    </body>

    </html>
<?php
}
?>