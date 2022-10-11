<!DOCTYPE html>
<html>

<head>
    <title>NeW Teck | Advanced</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="images/logo.svg" />
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
                <span style="margin-left: 10px;margin-top: 10px;cursor: pointer;" class="user" onclick="window.location='userPage.php'">Account</span>
            </div>



            <h1>Me</h1>

            <div class="box">
                <img src="images/cart.svg" style="width:20px;aspect-ratio: 1;display: inline-block;margin-right: 10px;" />
                <h3 style="margin-top: 3px;margin-bottom: 3px;display: inline-block;">Cart</h3>
            </div>

            <div class="box">
                <img src="images/suit-heart.svg" style="width:20px;aspect-ratio: 1;display: inline-block;margin-right: 10px;" />
                <h3 style="margin-top: 3px;margin-bottom: 5px;display: inline-block;">WishList</h3>
            </div>

            <div style="text-align: end;">

                <button class="s">Log Out</button>


            </div>



        </div>
    </div>
    <div class="carosel" style="width: 80%;margin-left:10%" id="car">


        <div id="imm">
            <h4 style="color:white">Filters</h4>
            <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width: 135px;" placeholder="Keyword" /><button class="s" style="border-radius: 5px;" onclick="search();" id="search">Filter</button><br />
            <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width: 55px;" placeholder="Min" /><span style="color:white"> - </span><input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width: 55px;" placeholder="Max" /><span style="color:white"> : Price </span><br />
            <select style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width:150px; margin-top: 10px;margin-bottom: 10px;color:rgb(106 117 117)">
                <option>All</option>
                <option>Action</option>
                <option>Indi</option>
                <option>Open World</option>
                <option>Survival</option>
                <option>Adventure</option>

            </select><span style="color:white"> : Genre </span><br />
            <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width: 55px;" placeholder="Min" /><span style="color:white"> - </span><input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width: 55px;" placeholder="Max" /><span style="color:white"> : Space Required </span><br />
            <h4 style="color:white">Results</h4>
            <div  style="padding:5px;border:solid 1px rgb(106 117 117);border-radius: 5px;background-color:  rgb(48, 44, 44);width:100%;height: 200px;">

            </div>
        </div>
        <div class="car-div2">
            <h2 style="color: white;">Category</h2>
            <div class="new-itm" style="border: solid white 2px;box-sizing:border-box ;">

                <div class="new-im" style="background-image: url('Products/switcholed2-1641412602120.jpg');">

                </div>
                <div class="new-des">

                    <h5 style="margin: 0;">

                       Gaming
                    </h5>
                    <div style="text-align: end;">
                        <span></span>
                    </div>
                </div>
            </div>


            <div class="new-itm" >
                <div class="new-im" style="background-image: url('Products/IMG_20190615_214330-2.webp');">

                </div>
                <div class="new-des">

                    <h5 style="margin: 0;">Desktop
                    </h5>
                    <div style="text-align: end;">
                        <span></span>
                    </div>
                </div>
            </div>


            <div class="new-itm" >
                <div class="new-im" style="background-image: url('Products/photo-1629429408209-1f912961dbd8.jpg');">

                </div>
                <div class="new-des">

                    <h5 style="margin: 0;">Acessories


                    </h5>
                    <div style="text-align: end;">
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="new-itm" >
                <div class="new-im" style="background-image: url('Products/gamecontrolers-2048px-00023.webp');">

                </div>
                <div class="new-des">

                    <h5 style="margin: 0;">

                    Controllers
                    </h5>
                    <div style="text-align: end;">
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="new-itm" >
                <div class="new-im" style="background-image: url('Products/20211018_1102470.webp');">

                </div>
                <div class="new-des">

                    <h5 style="margin: 0;">
                        Laptops
                    </h5>
                    <div style="text-align: end;">
                        <span></span>
                    </div>
                </div>
            </div>







        </div>

    </div>
    <div style="margin-top: 60px"></div>
    <label id="sp" for="sp" onclick="onli();" style="margin-left:10px ;color: white;padding:10px;border:solid white 2px;width: fit-content;margin-top: 60px;">Sort By : New Releases </label>
    <div id="spa" class="spa2">
        <div id="h" class="h2">
            <p class="ho" style="margin: 5px" onclick="setcat('New Releases')">New Releases</p>
            <p class="ho" style="margin: 5px" onclick="setcat('Comming Soon')">Comming Soon</p>

            <p class="ho" style="margin: 5px" onclick="setcat('Price : Low To Heigh')">Price : Low To Heigh</p>

            <p class="ho" style="margin: 5px" onclick="setcat('Price : Heigh To Low')">Price : Heigh To Low</p>
        </div>

    </div>
    <div class="main-div" id="main" style="margin-top: 20px;">


        <div class="card" style="background-image: url('Games/9AcM3vy5t77zPiJyKHwRfnNT.webp')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1000.00</span>
        </div>


        <div class="card" style="background-image: url('Games/Apotheon_logo.png')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1000.00</span>
        </div>

        <div class="card" style="background-image: url('Games/immortals-fenyx-rising-button-fin-1603917826191.jpg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
        </div>

        <div class="card" style="background-image: url('Games/life-is-strange-true-colors_tyhg.jpg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1500.00</span>
        </div>

        <div class="card" style="background-image: url('Games/MV5BYzcxMmE2NjItNDc0ZS00NmY3LTk0ZDAtZGJmMDBmMzYyZDczXkEyXkFqcGdeQXVyMzM2MzI5MzU@._V1_FMjpg_UX1000_.jpg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
        </div>

        <div class="card" style="background-image: url('Games/5b3630baae653a57df0c36e6.webp')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
        </div>

        <div class="card" style="background-image: url('Games/a3888780581_10.jpg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
        </div>

        <div class="card" style="background-image: url('Games/MV5BYTljYjM2OGYtNzU5NC00ODBiLTk4Y2ItMmE0ZDUxMzJmYWU4XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_FMjpg_UX1000_.jpg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
        </div>

        <div class="card" style="background-image: url('Games/61FEIn3sftL._SL1200_.jpg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
        </div>

        <div class="card" style="background-image: url('Games/Weird-West-Free-Download-By-Steam-repacks.webp')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
        </div>


    </div>


















    <script src="script.js"></script>


</body>

</html>