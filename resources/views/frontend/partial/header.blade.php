    <!-- header area starts -->
    <header class="bg-nav-black">
        <div class="nav-wrapper">
            <div class="nav-left">
                <a href="{{ route('home.index') }}" class="nav-logo">
                    <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="" srcset="">
                </a>
                <div class="nav-search-area desktop-searcbar">
                    <div class="nav-search-input-field">
                        <form action="#">
                            <input type="text" name="search" class="bg-nav-black">
                            <div class="nav-search-icon">
                                <img src="{{ asset('frontend/assets/images/search-normal.svg') }}" alt=""
                                    srcset="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="nav-right">
                <div class="mobile-search-bar">
                    <img src="{{ asset('frontend/assets/images/search-normal-mobile.svg') }}" alt="Search Icon">
                    <!-- Search bar mobile popup -->
                    <div class="hidden nav-search-area mobile-search-popup">
                        <div class="mobile-search-showing-div">
                            <div class="nav-search-input-field">
                                <form action="#">
                                    <input type="text" name="mobile-search" class="bg-nav-black">
                                    <div class="nav-search-icon">
                                        <img src="assets/images/search-normal.svg" alt="Search Icon">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-img">
                    <img src="{{ asset('frontend/assets/images/profile-circle.png') }}" alt="" srcset="">
                    <!-- LOG IN/SIGN UP Popup content -->
                    <div class="hidden profile-popup">
                        <div class="profile-popup-content">
                            <a href="{{ route('login') }}">Log In</a>
                            <div class="line-div"></div>
                            <a href="{{ route('register') }}">Sign Up</a>
                            <div class="line-div"></div>
                            <a href="{{ route('logout') }}" class="hum_log-out_btn"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa-light fa-power-off"></i> Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
