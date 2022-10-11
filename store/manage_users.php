<!DOCTYPE html>
<html>

<head>
    <title>NeW Teck | Manage Users</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="../about/icon/icon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body id="bo" style="background-color:rgb(18, 18, 18);">

    <div class="head">
        <div class="s-d"> <input type="text" placeholder="Search" style="display: in;" id="search" class="search" /><button class="s" onclick="search();" id="search">Search</button></div>
        <div class="l-d">
            <div class="logo" onclick="window.location='index.php'"></div>
        </div>
    </div>


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
                <span style="margin-left: 10px;margin-top: 10px;cursor: pointer;" class="user" onclick="window.location='userPage.php'">Admin Pannel</span>
            </div>






            <div style="text-align: end;">

                <button class="s">Log Out</button>


            </div>



        </div>
    </div>
    

    </div>
    
    <div class="main-div" id="main" style="margin-top: 20px;">


        <div class="card" style="background-image: url('images/user.svg');box-sizing: border-box;">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">name</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('1')">
                <div class="gf" id="ac1" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
           
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 180px;">View</span>

        </div>


        <div class="card" style="background-image: url('images/user.svg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">name</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('2')">
                <div class="gf" id="ac2" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
           
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 180px;">View</span>

        </div>

        <div class="card notvf" style="background-image: url('images/user.svg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">name</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('3')">
                <div class="gf" id="ac3" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
           
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 180px;">View</span>

        </div>

        <div class="card" style="background-image: url('images/user.svg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">name</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('4')">
                <div class="gf" id="ac4" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 180px;">View</span>

        </div>

        <div class="card" style="background-image: url('images/user.svg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">name</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('5')">
                <div class="gf" id="ac5" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 180px;">View</span>

        </div>

        <div class="card" style="background-image: url('images/user.svg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">name</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('6')">
                <div class="gf" id="ac6" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 180px;">View</span>

        </div>

        <div class="card" style="background-image: url('images/user.svg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">name</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('7')">
                <div class="gf" id="ac7" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 180px;">View</span>

        </div>

        <div class="card" style="background-image: url('images/user.svg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">name</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('8')">
                <div class="gf" id="ac8" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 180px;">View</span>

        </div>

        <div class="card" style="background-image: url('images/user.svg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">name</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('9')">
                <div class="gf" id="ac9" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 180px;">View</span>

        </div>

        <div class="card" style="background-image: url('images/user.svg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">name</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('10')">
                <div class="gf" id="ac10" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 180px;">View</span>

        </div>


    </div>


















    <script src="script.js"></script>


</body>

</html>