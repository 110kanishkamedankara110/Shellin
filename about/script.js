function header() {
    document.getElementById("header").style.top = "0";
    document.getElementById("m1").style.marginLeft = "0"
    if (window.innerWidth <= 600) {
        document.getElementById("m2").style.marginLeft = "200%";

    } else {
        document.getElementById("m2").style.marginLeft = "20px";


    }
    setTimeout(function() {


        slider();
    }, 5000)





}
var img = 2;
var noOfImg = 11;


function slider() {
    setInterval(sliderSlide, 5000);
}


function sliderSlide() {

    if (img <= noOfImg) {
        document.getElementById("i1").style.backgroundImage = "url('slider/" + img + ".JPG')";

        img += 1;
    } else {
        img = 1;
    }




}

function header2() {

    document.getElementById("header").style.top = "0";
    document.getElementById("m1").style.marginLeft = "0px";
    setTimeout(out, 2000);


}

function scro() {


    if (window.innerWidth <= 600) {
        var op = document.getElementById("m2").getBoundingClientRect().y;
        var opt = document.getElementById("m2").getBoundingClientRect().bottom;
        var m1top = document.getElementById("m1").getBoundingClientRect().top;

        var sc = window.scrollY;
        if (sc >= opt) {
            document.getElementById("m2").style.marginLeft = "200%";

        } else if (sc >= op || sc >= m1top) {
            // alert("working");
            document.getElementById("m2").style.marginLeft = "10%";

        } else {
            document.getElementById("m2").style.marginLeft = "200%";

        }

        // alert("sc=" + sc + " " + "op=" + opt);
    } else {


    }


}

function scro2() {


    if (window.innerWidth <= 600) {
        var op = document.getElementById("m1").getBoundingClientRect().bottom;
        var opt = document.getElementById("m1").getBoundingClientRect().y;
        var m2boto = document.getElementById("m2").getBoundingClientRect().bottom;
        var sc = window.scrollY;
        if (sc >= opt) {
            document.getElementById("m1").style.marginLeft = "-100%";

        } else if (sc >= op || sc >= m2boto) {
            document.getElementById("m1").style.marginLeft = "0";

        } else {
            document.getElementById("m1").style.marginLeft = "0";

        }
    } else {

    }

    // alert("sc=" + sc + " " + "op=" + op);



}

function out() {
    document.getElementById("s").style.height = "fit-content";
    document.getElementById("pg").style.fontSize = "20px";
    document.getElementById("dd").style.visibility = "visible";
}




var theam = true //if dark
var theam2 = true //if dark
function the() {
    if (theam) {
        document.getElementById("bod").className = "body-light";
        document.getElementById("tit1").className = "tit-light";
        document.getElementById("tit2").className = "tit-light";
        document.getElementById("ico").className = "ico-light";
        document.getElementById("m1").className = "main1-light";
        document.getElementById("m2").style.color = "rgb(53,50,50)";
        // document.getElementById("link").className = "link-light";
        // document.getElementById("tw").className = "tw-light";
        // document.getElementById("ig").className = "ig-light";
        // document.getElementById("b1").className = "b1-light";
        theam = false;
    } else {
        document.getElementById("bod").className = "body";
        document.getElementById("tit1").className = "tit";
        document.getElementById("tit2").className = "tit";
        document.getElementById("ico").className = "ico";
        document.getElementById("m1").className = "main1";
        document.getElementById("link").className = "link";
        // document.getElementById("tw").className = "tw";
        // document.getElementById("ig").className = "ig";
        document.getElementById("m2").style.color = "#eeeeee";
        // document.getElementById("b1").className = "b1";

        theam = true;
    }

}

function the2() {
    if (theam2) {
        document.getElementById("bod2").className = "body2-light";
        document.getElementById("tit1").className = "tit-light";
        document.getElementById("tit2").className = "tit-light";
        document.getElementById("ico").className = "ico-light";
        document.getElementById("m1").className = "main1-light";
        document.getElementById("m1").style.color = "rgb(53,50,50)";
        document.getElementById("s").style.color = "rgb(53,50,50)";
        // document.getElementById("csh").className = "csh";
        // document.getElementById("py").className = "py";
        // document.getElementById("js").className = "js";

        theam2 = false;
    } else {
        document.getElementById("bod2").className = "body2";
        document.getElementById("tit1").className = "tit";
        document.getElementById("tit2").className = "tit";
        document.getElementById("ico").className = "ico";
        document.getElementById("m1").className = "main1";
        document.getElementById("s").style.color = "#eeeeee";
        document.getElementById("csh").className = "csh-light";
        document.getElementById("py").className = "py-light";
        document.getElementById("js").className = "js-light";
        document.getElementById("m1").style.color = "#eeeeee";

        theam2 = true;
    }

}