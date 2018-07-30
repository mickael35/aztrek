$(document).ready(function () {
    $(".burger").sidr({
        name: "respNav",
        source: ".main-nav",
        displace: false,
    });

    $(document).on("click", function () {
        $.sidr('close', 'respNav');
    });

    //Caroussel

    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 700,
        autoplayHoverPause: true,
    });

});