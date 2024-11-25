@extends('frontend.app')
@section('content')
    <main>
        <!-- score card section start -->
        <section class="score-card-section bg-nav-black">
            <div class="hidden pagination-space pag-left">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    style="transform: scaleX(-1);">
                    <path
                        d="M8.90991 19.9201L15.4299 13.4001C16.1999 12.6301 16.1999 11.3701 15.4299 10.6001L8.90991 4.08008"
                        stroke="#FAFAFA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div class="score-card-wrapper owl-carousel owl-theme ">
                <!-- first score card -->
                @foreach ($scores as $score)
                    <div class="single-score-card item">
                        <div class="score-time-venue">
                            <p>{{ $score['sports_type'] }}</p>
                            <p>{{ $score['play_date'] }}</p>
                        </div>
                        <div class="score-card-result-wrapper">
                            <div class="team-one">
                                <div class="team-logo-score">
                                    <div class="team-logo">
                                        <img src="{{ asset('backend/' . $score['team1_logo']) }}" alt=""
                                            srcset="">
                                    </div>
                                    <p class="team-name">{{ $score['team1_name'] }}</p>

                                </div>
                                <p class="final-scorecard">
                                    {{ $score['team1_score'] }}
                                </p>
                            </div>
                            <div class="team-two">
                                <div class="team-logo-score">
                                    <div class="team-logo">
                                        <img src="{{ asset('backend/' . $score['team2_logo']) }}" alt=""
                                            srcset="">
                                    </div>
                                    <p class="team-name">{{ $score['team2_name'] }}</p>

                                </div>
                                <p class="final-scorecard">
                                    {{ $score['team2_score'] }}
                                </p>
                            </div>
                        </div>
                        <p>{{ $score['winner'] }}</p>
                    </div>
                @endforeach
                <!-- second score card -->

                <!-- fourth score card -->


            </div>
            </div>
            <div class="visible pagination-space pag-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M8.90991 19.9201L15.4299 13.4001C16.1999 12.6301 16.1999 11.3701 15.4299 10.6001L8.90991 4.08008"
                        stroke="#FAFAFA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
        </section>
        <!-- score card section End -->
        <!-- banner area starts -->
        <section class="banner-section" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
            <div class="banner-content">
                <p>Gain unlimited access <span class="banner-span">to our exclusive <a href="#">contents</a></span>
                </p>
            </div>
        </section>
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
            tabindex="-1">
            <div class="modal-dialog custom-modal-width modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-content-wrapper">
                        <h3>Gain unlimited access to our exclusive contents</h3>
                        <div class="plan-card-wrapper">
                            <!-- plan card one -->
                            @foreach ($subscriptions as $subscription)
                                <div class="plan-card">
                                    <div class="plan-card-img">
                                        <img src="{{ asset('frontend/assets/images/plan-card-1.png') }}" alt="">
                                    </div>
                                    <h4>Subscribe {{ $subscription['package_name'] }} </h4>
                                    <!-- <p class="covarage">get unapologetic coverage for </p> -->
                                    <p class="monthly-price">${{ $subscription['rate'] }}
                                        USD/{{ $subscription['package_category'] }}
                                        @if ($subscription['package_saving'])
                                            (saving{{ $subscription['package_saving'] }})
                                        @endif
                                    </p>

                                    <p class="plan-card-para">
                                        {!! $subscription['description'] !!}
                                    </p>
                                    <a class="modal-next-btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                        href="#">Subscribe Now</a>
                                    <!-- <div class="card-gap-line"></div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="plan-point">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li>Support the writers </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li>Watch Premium contents </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li>Adds Free Blog Contents</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div> -->
                                </div>
                            @endforeach
                            <!-- plan card two -->

                            <!-- <div class="card-gap-line"></div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="plan-point">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li>Support the writers </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li>Watch Premium contents </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li>Adds Free Blog Contents</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- banner area ends -->

        <!-- top headline start -->
        <section class="top-headline-section common-padding">
            <div class="top-headline-content-wrapper">
                <div class="top-headline-first headline-box" data-aos="fade-right" data-aos-duration="1000">
                    <!-- event card  one -->


                    @foreach ($toptwo as $top2)
                        <a href="{{ route('blog.details.index', $top2->id) }}" class="event-card">
                            <div class="event-img">

                                @php
                                    $images = explode(',', $top2->image);
                                @endphp

                                {{-- Display only the first image --}}
                                @if (isset($images[0]))
                                    <img src="{{ asset('backend/' . $images[0]) }}" alt="Event Image">
                                @else
                                    <img src="{{ asset('backend/Sports-News.jpg') }}" alt="Default Image">
                                @endif
                            </div>
                            <p class="event-name">NBA</p>
                            <h2 class="common-heading">
                                {{ $top2['headline'] }}
                            </h2>
                        </a>
                    @endforeach
                    <!-- event card  two -->

                </div>
                <div class="top-headline-middle headline-box" data-aos="fade-up" data-aos-duration="1000">
                    <!-- event card  big -->
                    <a href="{{ route('blog.details.index', $top1->id) }}" class="event-card-2">
                        @foreach ($top1_images as $top1_image)
                            <div class="event-img event-img-big">
                                <img src="{{ asset('backend/' . $top1_image[0]) }}" alt="">
                            </div>
                        @endforeach
                        <p class="event-name">NBA</p>
                        <h2 class="common-heading common-heading-2">
                            {{ $top1['headline'] }} 📝 </h2>
                    </a>
                </div>
                <div class="top-headline-last headline-box" data-aos="fade-left" data-aos-duration="1000">
                    <div class="top-headline-content">
                        <div class="common-banner">
                            <h3 class="common-heading-two">
                                Top Headline
                            </h3>
                        </div>
                        <div class="top-headlines-wrapper">
                            <!-- headline one -->
                            @foreach ($tops as $top)
                                <div class="top-headline">
                                    <a href="#" class="common-heading">
                                        {{ $top['headline'] }}
                                    </a>
                                </div>
                                <div class="heading-gap-line"></div>
                            @endforeach

                            <!-- headline two -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top headline End -->
        <br>

        <br>
        <!-- Second headline and feature start -->
        <section class="second-heading-section common-padding">
            <div class="second-heading-content-wrapper" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="100">
                <div class="heading-area">
                    <div class="common-banner">
                        <h3 class="common-heading-two">
                            Top Headlines
                        </h3>
                    </div>
                    <div class="headline-card-wrapper">

                        @foreach ($all_newses as $all_news)
                            <!-- first card -->
                            <div class="headline-single-card">
                                @php
                                    $images = explode(',', $all_news->image);
                                @endphp

                                {{-- Display only the first image --}}


                                <div class="heading-card-img">
                                    @if (isset($images[0]))
                                        <img src="{{ asset('backend/' . $images[0]) }}" alt="Event Image">
                                    @else
                                        <img src="{{ asset('backend/Sports-News.jpg') }}" alt="Default Image">
                                    @endif

                                </div>



                                <div class="headline-card-details">
                                    <h3 class="card-common-h3">
                                        {{ $all_news['headline'] }}
                                    </h3>
                                    <p class="common-card-para">
                                        {!! $all_news['semi_headline'] !!}
                                    </p>
                                    <a href="{{ route('blog.details.index', $all_news->id) }}" class="common-card-link">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <!-- second card -->

                        <div style="text-align:center">{{ $all_newses->links() }}</div>
                    </div>
                </div>
                <div class="fetured-area">
                    <div class="common-banner">
                        <h3 class="common-heading-two">
                            Featured
                        </h3>
                    </div>
                    <div class="fetured-content-wrapper">
                        @foreach ($features as $feature)
                            <a href="{{ route('blog.details.index', $feature->id) }}" class="featured-content">
                                @php
                                    $images = explode(',', $feature->image);
                                @endphp


                                <a href="blog-details.html" class="featured-content">
                                    <div class="fetured-img">
                                        @if (isset($images[0]))
                                            <img src="{{ asset('backend/' . $images[0]) }}" alt="Event Image">
                                        @else
                                            <img src="{{ asset('backend/Sports-News.jpg') }}" alt="Default Image">
                                        @endif
                                    </div>
                                    <p>{{ $feature['headline'] }}</p>
                                </a>
                        @endforeach
                    </div>
                    {{-- Display only the first image --}}

                </div>



            </div>
            </div>
            </div>
        </section>
        <!-- Second headline and feature End -->

        <!-- transfer news section start -->
        <section class="transfer-section common-padding">
            <div class="common-banner">
                <h3 class="common-heading-two">
                    Transfer News
                </h3>
            </div>
            <div class="transfer-news-content-wrapper">
                <div class="transfer-video" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    <div class="transfer-video-thumb">

                    </div>
                    <a href="https://www.youtube.com/watch?v=4xACABWqfho" class="video-play">
                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="121" viewBox="0 0 120 121"
                            fill="none">
                            <path
                                d="M106 60.5C106 85.9051 85.4051 106.5 60 106.5C34.5949 106.5 14 85.9051 14 60.5C14 35.0949 34.5949 14.5 60 14.5C85.4051 14.5 106 35.0949 106 60.5Z"
                                fill="black" fill-opacity="0.4" stroke="white" stroke-width="8" />
                            <path
                                d="M45.5 60.5V53.1C45.5 43.55 52.25 39.7 60.5 44.45L66.9 48.15L73.3 51.85C81.55 56.6 81.55 64.4 73.3 69.15L66.9 72.85L60.5 76.55C52.25 81.3 45.5 77.4 45.5 67.9V60.5Z"
                                fill="#E2E0E0" />
                        </svg>
                    </a>
                    <a href="{{ route('blog.details.index', $transfer1->id) }}"
                        class="common-heading-2 common-heading tranfer-responsive-font">
                        {{ $transfer1['headline'] }}
                    </a>
                </div>
                <div class="transfer-news-wrapper" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                    <div class="transfer-news">

                        <!-- tranfer content-1 -->
                        @foreach ($transfertwo as $transfer2)
                            <a href="{{ route('blog.details.index', $transfer2->id) }}" class="transfer-content">
                                @php
                                    $images = explode(',', $transfer2->image);
                                @endphp
                                <div class="tranfer-img">
                                    @if (isset($images[0]))
                                        <img src="{{ asset('backend/' . $images[0]) }}" alt="Event Image">
                                    @else
                                        <img src="{{ asset('backend/Sports-News.jpg') }}" alt="Default Image">
                                    @endif

                                </div>

                                <a href="{{ route('blog.details.index', $transfer2->id) }}" class="common-heading">
                                    {{ $transfer2['headline'] }}
                                </a>
                            </a>
                            <!-- tranfer content-2 -->
                        @endforeach
                    </div>
                </div>
            </div>

        </section>
        <!-- transfer news section End -->
    </main>
@endsection
