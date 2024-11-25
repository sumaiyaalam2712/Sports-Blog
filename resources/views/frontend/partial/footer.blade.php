<footer class="bg-black">
    <div class="container">
        <div class="footer-content-wrapper">
            <a class="nav-logo" href="{{ route('home.index') }}">
                <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="" srcset="">
            </a>
            <p class="notice">
                Newsletter Coming Soon...
            </p>
            <div class="social-media-wrapper">
                @foreach ($social_medias as $social_media)
                    <a href="{{ url($social_media['link']) }}"><img
                            src="{{ asset('backend/' . $social_media['logo']) }}" class="img-thumbnail" height="50px"
                            width="50px" alt=""></a>
                @endforeach
            </div>
            <h4 class="right-reserved">
                © 2024 Unapologeticsports All Rights Reserved
            </h4>
        </div>
    </div>
</footer>
<!-- footer area ends -->
