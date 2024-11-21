// login/signup popup
document
    .querySelector(".profile-img")
    .addEventListener("click", function (event) {
        event.stopPropagation();
        var popup = document.querySelector(".profile-popup");
        popup.classList.toggle("show");
    });

document.addEventListener("click", function (event) {
    var popup = document.querySelector(".profile-popup");
    if (!document.querySelector(".profile-img").contains(event.target)) {
        popup.classList.remove("show");
    }
});

// mobile-searchbar popup
document
    .querySelector(".mobile-search-bar")
    .addEventListener("click", function (event) {
        event.stopPropagation();
        var popup = document.querySelector(".mobile-search-popup");
        popup.classList.toggle("show");
    });

document.addEventListener("click", function (event) {
    var popup = document.querySelector(".mobile-search-popup");
    if (!document.querySelector(".mobile-search-bar").contains(event.target)) {
        popup.classList.remove("show");
    }
});

// Stop propagation when clicking inside the popup to avoid closing it
document
    .querySelector(".mobile-search-popup")
    .addEventListener("click", function (event) {
        event.stopPropagation();
    });

$(document).ready(function () {
    var owl = $(".owl-carousel");

    owl.owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        responsive: {
            0: { items: 1 },
            400: { items: 2 },
            600: { items: 3 },
            1000: { items: 4 },
            1400: { items: 5 },
            1600: { items: 6 },
        },
        onInitialized: checkNav,
        onTranslated: checkNav,
    });

    function checkNav(event) {
        var $nextButton = $(".pagination-space.pag-right");
        var $prevButton = $(".pagination-space.pag-left");

        if ($(".owl-next").hasClass("disabled")) {
            $nextButton.removeClass("visible").addClass("hidden");
        } else {
            $nextButton.removeClass("hidden").addClass("visible");
        }

        if ($(".owl-prev").hasClass("disabled")) {
            $prevButton.removeClass("visible").addClass("hidden");
        } else {
            $prevButton.removeClass("hidden").addClass("visible");
        }

        if (
            $(".owl-next").hasClass("disabled") ||
            $(".owl-prev").hasClass("disabled")
        ) {
            $(".score-card-wrapper").removeClass("score-card-120");
            $(".score-card-wrapper").addClass("score-card-60");
        } else {
            $(".score-card-wrapper").removeClass("score-card-60");
            $(".score-card-wrapper").addClass("score-card-120");
        }
    }

    $(".pagination-space.pag-right").click(function () {
        owl.trigger("next.owl.carousel");
    });

    $(".pagination-space.pag-left").click(function () {
        owl.trigger("prev.owl.carousel");
    });
});

// AOS.init({
//     once: true,
// });

// // tranfer-news video popup
// $(".video-play").magnificPopup({
//     type: "iframe",
//     iframe: {
//         patterns: {
//             youtube: {
//                 index: "youtube.com/",
//                 id: "v=",
//                 src: "https://www.youtube.com/embed/%id%?autoplay=1",
//             },
//         },
//         srcAction: "iframe_src",
//     },
// });

//   card payment validation
$("#ccnum").payform("formatCardNumber");
$("#expiry").payform("formatCardExpiry");
$("#cvc").payform("formatCardCVC");
