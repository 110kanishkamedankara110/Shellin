var showmenu = false;

function showMenu() {

    var menu = document.getElementById("menu");
    var menubut = document.getElementById("menu-but");

    if (showmenu) {

        menu.style = "width:0;height:0";
        menubut.style = "transform: rotate(0deg);";
        showmenu = false;
        document.getElementById("men").style.marginLeft = "100px";
        menu.style.padding = "0";


    } else {

        menu.style = "width:300px;height:fit-content";
        menubut.style = "transform: rotate(180deg);";
        showmenu = true;
        document.getElementById("men").style.marginLeft = "0";
        menu.style.padding = "10px";

    }
}
state = false;

function onli() {
    if (!state) {
        document.getElementById("spa").className = "spa";
        document.getElementById("h").className = "h";
        state = true;
    } else {
        document.getElementById("spa").className = "spa2";
        document.getElementById("h").className = "h2";
        state = false;
    }

}

function setcat2(x) {
    document.getElementById("sp").innerHTML = "Select : " + x;
    onli();
}

function setcat(x) {
    document.getElementById("sp").innerHTML = "Sort By : " + x;
    onli();
}



















function showsignin() {

    document.getElementById("sd").style.order = "2";
    document.getElementById("ld").style.order = "1";
    document.getElementById("sdn").style.display = "block";
    document.getElementById("ldn").style.display = "none";
    document.getElementById("welcome-login").style.display = "none";
    document.getElementById("welcome-sign").style.display = "block";
    document.getElementById("sd").style.backgroundImage = "none";
    document.getElementById("ld").style.backgroundImage = "url('images/Signin.jpg')";

}

function showlogin() {

    document.getElementById("sd").style.order = "1";
    document.getElementById("ld").style.order = "2";
    document.getElementById("sdn").style.display = "none";
    document.getElementById("ldn").style.display = "block";
    document.getElementById("welcome-login").style.display = "block";
    document.getElementById("welcome-sign").style.display = "none";
    document.getElementById("sd").style.backgroundImage = "url('images/loginIcon.jpg')";
    document.getElementById("ld").style.backgroundImage = "none";

}


function active_deactive(x, y, z) {

    if (z == '1') {

        document.getElementById("ac" + x).style.marginLeft = "20px";
        document.getElementById("ac" + x).style.backgroundColor = "tomato";
        var r = new XMLHttpRequest();
        var l = new FormData();
        l.append("id", y);
        l.append("stat", 2);
        r.onreadystatechange = function() {
            if (r.readyState == 4) {

                window.location.reload();


            }


        };
        r.open("POST", "process/deactivate.php", true);
        r.send(l);

    } else {

        document.getElementById("ac" + x).style.marginLeft = "0";
        document.getElementById("ac" + x).style.backgroundColor = "greenyellow";
        var r = new XMLHttpRequest();
        var l = new FormData();
        l.append("id", y);
        l.append("stat", 1);
        r.onreadystatechange = function() {
            if (r.readyState == 4) {

                window.location.reload();


            }


        };
        r.open("POST", "process/deactivate.php", true);
        r.send(l);
    }
}

function update(y) {
    var pri = document.getElementById("but" + y).value;
    var r = new XMLHttpRequest();
    var l = new FormData();
    l.append("id", y);
    l.append("price", pri);
    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            window.location.reload();


        }


    };
    r.open("POST", "process/update.php", true);
    r.send(l);

}

function pagi(x) {

    var r = new XMLHttpRequest();
    var l = new FormData();
    l.append("page", x);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            document.getElementById("res").innerHTML = r.responseText;


        }


    };
    r.open("POST", "pagi.php", true);
    r.send(l);
}

function search() {
    var r = new XMLHttpRequest();
    var l = new FormData();
    var key = document.getElementById("se").value

    l.append("key", key);

    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            document.getElementById("res").innerHTML = r.responseText;


        }


    };
    r.open("POST", "process/search.php", true);
    r.send(l);
}

function addcart(id) {
    var r = new XMLHttpRequest();
    var l = new FormData();
    var size = document.getElementById("size").value;

    if (size == "select") {
        alert("Select Size");
    } else {

        l.append("id", id);
        l.append("qty", document.getElementById("qty").value);
        l.append("size", size);
        r.onreadystatechange = function() {
            if (r.readyState == 4) {


                if (r.responseText == "no") {
                    window.location = "login And Register.php";
                } else {
                    alert(r.responseText);
                }

            }


        };
        r.open("POST", "process/addtocart.php", true);
        r.send(l);
    }

}

function rem(x) {
    var r = new XMLHttpRequest();
    var l = new FormData();


    l.append("id", x);
    r.onreadystatechange = function() {
        if (r.readyState == 4) {


            window.location.reload();

        }


    };
    r.open("POST", "process/removecart.php", true);
    r.send(l);



}




var carImg = 0;
var int;

function carSet() {
    caro();
    int = setInterval(caro, 4000);



}

function caro() {


    var s0 = "images/car1.jpg";
    var s1 = "images/car2.jpg";
    var s2 = "images/car3.jpg";
    var s3 = "images/car4.jpg";
    var s4 = "images/car5.jpg";

    if (carImg == 0) {
        document.getElementById("imm").style.backgroundImage = "url(" + s0 + ")";
    } else if (carImg == 1) {
        document.getElementById("imm").style.backgroundImage = "url(" + s1 + ")";
    } else if (carImg == 2) {
        document.getElementById("imm").style.backgroundImage = "url(" + s2 + ")";
    } else if (carImg == 3) {
        document.getElementById("imm").style.backgroundImage = "url(" + s3 + ")";
    } else if (carImg == 4) {
        document.getElementById("imm").style.backgroundImage = "url(" + s4 + ")";
    }



    for (var j = 0; j < 5; j++) {
        if (j == (carImg)) {
            document.getElementById("c" + j).style = "background-color:teal;";

        } else {
            document.getElementById("c" + j).style = "background-color:white;";

        }
    }

    carImg += 1;
    if (carImg == 5) {
        carImg = 0;
    }






}

function change(x) {
    carImg = x;

    caro();


}

function signin() {
    var email = document.getElementById("email").value;
    var pw1 = document.getElementById("password").value;
    var pw2 = document.getElementById("2ndpassword").value;


    var v = new FormData();
    v.append("email", email);
    v.append("pw1", pw1);
    v.append("pw2", pw2);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            if (text == "User Register Sucess") {
                window.location = "login And Register.php";
            }

        }


    };
    r.open("POST", "process/signin_process.php", true);
    r.send(v);

}

function ediqty(x) {
    var v = new FormData();

    var qty = document.getElementById("qty").value;
    v.append("qty", qty);
    v.append("id", x);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            // document.getElementById("qty").value = qty;
            window.location.reload();
        }


    };
    r.open("POST", "process/ediqty.php", true);
    r.send(v);

}

function reload() {
    setInterval(rel, 6000);
}

function rel() {
    window.location.reload();
}

function login() {
    var email = document.getElementById("log_em").value;
    var pw = document.getElementById("log_pw").value;



    var v = new FormData();
    v.append("email", email);
    v.append("pw", pw);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "Sucess") {
                window.location = "index.php";
            } else {
                alert(text);
            }

        }


    };
    r.open("POST", "process/login_process.php", true);
    r.send(v);

}

function adminLogin() {
    var email = document.getElementById("ad_log_em").value;
    var pw = document.getElementById("ad_log_pw").value;



    var v = new FormData();
    v.append("email", email);
    v.append("pw", pw);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "Sucess") {
                window.location = "admin_page.php";
            } else {
                alert(text);
            }

        }


    };
    r.open("POST", "process/adminSignin.php", true);
    r.send(v);
}

function logout() {


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            window.location = "index.php";

        }


    };
    r.open("POST", "process/logout.php", true);
    r.send();

}

var img_1 = "";
var img_2 = "";
var img_3 = "";
var img_4 = "";


function img1() {
    var image = document.getElementById("img1").files[0];
    var url = URL.createObjectURL(image);
    img_1 = image;
    document.getElementById("i1").style = "background-image:url(" + url + ");background-size: cover; background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;";
    if (document.getElementById("i2").style.display == "none") {
        document.getElementById("i2").style = "display:grid;background-image:url('images/plus gray.svg');background-size: cover; background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;";
    }
    document.getElementById("imm2").style = "background-image:url(" + url + ");background-size: cover;background-position: center;background-repeat:no-repeat ; border: solid rgb(106 117 117) 2px;box-sizing:border-box ;border-radius: 20px;";


}

function img2() {
    var image = document.getElementById("img2").files[0];
    var url = URL.createObjectURL(image);
    img_2 = image;
    document.getElementById("i2").style = "background-image:url(" + url + ");background-size: cover; background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;";
    if (document.getElementById("i3").style.display == "none") {
        document.getElementById("i3").style = "display:grid;background-image:url('images/plus gray.svg');background-size: cover; background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;";
    }


}

function img3() {
    var image = document.getElementById("img3").files[0];
    var url = URL.createObjectURL(image);
    img_3 = image;
    document.getElementById("i3").style = "background-image:url(" + url + ");background-size: cover; background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;";
    if (document.getElementById("i4").style.display == "none") {
        document.getElementById("i4").style = "display:grid;background-image:url('images/plus gray.svg');background-size: cover; background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;";
    }

}

function img4() {
    img_4 = image;
    var image = document.getElementById("img4").files[0];
    var url = URL.createObjectURL(image);
    document.getElementById("i4").style = "background-image:url(" + url + ");background-size: cover; background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;";



}

function list() {
    var title = document.getElementById("title").value;
    var price = document.getElementById("price").value;


    var color = document.getElementById("color").value;
    var description = document.getElementById("des").value;

    var l = new FormData();
    var i = 0;


    l.append("title", title);
    l.append("price", price);

    l.append("color", color);
    l.append("des", description);


    if (img_1 == "") {

        alert("Plese Select  a Image");

    } else {
        l.append("img1", document.getElementById("img1").files[0]);
        i = 1;
        if (img_2 != "") {
            l.append("img2", document.getElementById("img2").files[0]);
            i = 2

        }
        if (img_3 != "") {
            l.append("img3", document.getElementById("img3").files[0]);
            i = 3

        }
        if (img_4 != "") {
            l.append("img4", document.getElementById("img4").files[0]);
            i = 4

        }

        l.append("images", i);

        var r = new XMLHttpRequest();
        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                var text = r.responseText;
                if (text == "sucess") {
                    window.location.reload();
                } else {
                    alert(text);
                }
            }
        };
        r.open("POST", "process/list.php", true);
        r.send(l);
    }





}

function singleView(x) {

    window.location = "singleView.php?id=" + x;

}

function Cartcheckout() {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "no session") {
                window.location = "login And Register.php";
            } else if (text == "no address") {
                document.getElementById("pop-4").style = "display:flex";

            } else {
                window.location = "invoice.php?inv=" + text;
            }

        }
    };
    r.open("POST", "process/cartCheckout.php", true);
    r.send();

}

function updateSize(x) {
    var size = document.getElementById("size").value;

    if (size == "select") {

    } else {
        var r = new XMLHttpRequest();
        var l = new FormData();
        l.append("id", x);


        l.append("size", size);
        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                var text = r.responseText;


                window.location = "cart.php";



            }
        };
        r.open("POST", "process/updateSize.php", true);
        r.send(l);
    }


}

function updateStat(x, y) {
    var newStat;
    if (x == "Pending") {
        newStat = "Finished";

    } else {
        newStat = "Pending";
    }

    var r = new XMLHttpRequest();
    var l = new FormData();
    l.append("id", y);
    l.append("stat", newStat);


    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            window.location = "purchasedHistory.php";



        }
    };
    r.open("POST", "process/changeStat.php", true);
    r.send(l);
}


function adLogo() {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            window.location = "index.php";

        }


    };
    r.open("POST", "process/logout.php", true);
    r.send();
}

function checkout(x) {


    var size = document.getElementById("size").value;

    if (size == "select") {
        alert("Select Size");
    } else {
        var r = new XMLHttpRequest();
        var l = new FormData();
        l.append("product_id", x);
        l.append("qty", document.getElementById("qty").value)
        l.append("size", size);
        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                var text = r.responseText;

                if (text == "no session") {
                    window.location = "login And Register.php";
                } else if (text == "no address") {
                    document.getElementById("pop-4").style = "display:flex";

                } else {
                    window.location = "invoice.php?inv=" + text;
                }


            }
        };
        r.open("POST", "process/checkout.php", true);
        r.send(l);
    }


}

function add(x) {
    var r = new XMLHttpRequest();
    var l = new FormData();
    l.append("user_id", x);
    l.append("address", document.getElementById("ad").value);
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            window.location.reload();

        }
    };
    r.open("POST", "process/addAddress.php", true);
    r.send(l);
}

function updatead(x) {
    var r = new XMLHttpRequest();
    var l = new FormData();
    l.append("user_id", x);
    l.append("address", document.getElementById("ad").value);
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            alert(r.responseText);
            window.location.reload();

        }
    };
    r.open("POST", "process/Address.php", true);
    r.send(l);
}