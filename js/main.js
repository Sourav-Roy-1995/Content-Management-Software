//(function ($) {
$('select').niceSelect();
//$(".sidebar-area").niceScroll({
//    cursorborder: "",
//    cursorcolor: "blue",
//});
//$(".content-update").niceScroll({
//    cursorborder: "",
//    cursorcolor: "blue",
//});
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 1) {
            $('.sticky').removeClass("scroll-header");
        } else {
            $('.sticky').addClass("scroll-header");
        }
    });
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 1) {
            $('.stickyone').removeClass("scroll-sidebar");
        } else {
            $('.stickyone').addClass("scroll-sidebar");
        }
    });
$(".dropdown").click(function () {
    $('.logout').toggle(300);
    return false
})



//})(jQuery);