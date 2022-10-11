function redirect() {


    //test----- after hosting remove
    // setTimeout(function() {
    //     window.location = "about/index.php";
    // }, 6000);
    //test

    //after host use this


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var x = "about/slider/1.JPG";
            var x = "about/slider/2.JPG";
            var x = "about/slider/3.JPG";
            var x = "about/slider/4.JPG";
            var x = "about/slider/5.JPG";
            var x = "about/slider/6.JPG";
            var x = "about/slider/7.JPG";
            var x = "about/slider/8.JPG";
            var x = "about/slider/9.JPG";
            var x = "about/slider/10.JPG";
            var x = "about/slider/11.JPG";

            window.location = "about/index.php";
        }

    };
    r.open("GET", "about/index.php", true);
    r.send();
}