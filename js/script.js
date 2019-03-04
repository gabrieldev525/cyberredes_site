var date = new Date(); 
var year = date.getFullYear();

$(window).on("load",function(){
    // footer year
    var footerYear = $("footer #years");
    footerYear.text(year);
});


$(window).on("scroll", function() {
    var y = $(window).scrollTop();

    //alert("ola");

    if(y >= $(window).height() / 3) {
        $("#menu").addClass("menu-style");
    } else {
        $("#menu").removeClass("menu-style");
    }
});

// more footer
var newsletterOpenned = false;
$("footer #more").click(function() {
    if(newsletterOpenned) {
        $("footer #more").css("transform", "rotateZ(0deg)");
        $("footer #newsletter").css("display", "none");
        newsletterOpenned = false;
    } else {
        $("footer #more").css("transform", "rotateZ(180deg)");
        $("footer #newsletter").css("display", "block");
        newsletterOpenned = true;
    }
});