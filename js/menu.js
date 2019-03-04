$("#mobile-menu #close").click(function() {
    $("#mobile-menu").hide();
});

$(".menu-side a").click(function() {
    $("#mobile-menu").show();
});

$(window).on("resize", function() {
    if($(window).width() > 480) {
        $("#mobile-menu").hide();
    }
});