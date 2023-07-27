$(document).ready(function () {
    // $(window).on("load", function () {
    //     $("body").children().not("#loader").css("display", "none");

    //     setTimeout(removeLoader, 1500);
    // });
    // function removeLoader() {
    //     $("#loader").fadeOut(500, function () {
    //         $("#loader").remove();
    //         $("body").children().not("#loader").css("display", "");
    //         $(".back-to-top").hide();
    //     });
    // }
    var $backToTop = $(".back-to-top");

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 100) {
            $backToTop.fadeIn();
        } else {
            $backToTop.fadeOut();
        }
    });

    $backToTop.on("click", function (e) {
        $("html, body").animate({ scrollTop: 0 }, 100);
    });
});
