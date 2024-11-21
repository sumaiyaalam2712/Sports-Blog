<script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.payform.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js"></script>
<script>
    AOS.init({
        once: true,
    });

    $(".video-play").magnificPopup({
        type: "iframe",
        iframe: {
            patterns: {
                youtube: {
                    index: "youtube.com/",
                    id: "v=",
                    src: "https://www.youtube.com/embed/%id%?autoplay=1",
                },
            },
            srcAction: "iframe_src",
        },
    });
</script>
