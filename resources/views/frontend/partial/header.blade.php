    <!-- header area starts -->
    <style>
        .search__form {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .search__form .submit__button {
            display: block;
            padding: 8px 16px;
            background: #fff;
            color: #000;
            border-radius: 8px;

        }
    </style>


    <header class="bg-nav-black">
        <div class="nav-wrapper">
            <div class="nav-left">
                <a href="{{ route('home.index') }}" class="nav-logo">
                    <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="" srcset="">
                </a>
                <div class="nav-search-area desktop-searcbar">
                    <div class="nav-search-input-field">
                        <form class="search__form" action="{{ route('search.search') }}" method="POST">
                            @csrf
                            <input type="text" name="search" placeholder="search" class="bg-nav-black">
                            <button type="submit" class="submit__button">search</button>

                            <div class="nav-search-icon">

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
                            @auth
                                <!-- If logged in, show Log Out button -->
                                <a href="{{ route('logout') }}" class="hum_log-out_btn"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-light fa-power-off"></i> Log Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a href="{{ route('register') }}">Sign Up</a>
                            @else
                                <!-- If not logged in, show Log In and Sign Up links -->
                                <a href="{{ route('login') }}">Log In</a>
                                <div class="line-div"></div>
                                <a href="{{ route('register') }}">Sign Up</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
