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
                            @php
                            $date=$score->play_date=\Carbon\Carbon::parse($score->play_date)->format('d m y');
                        @endphp
                        <p>{{ $date }}</p>
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
                        <div class="score-time-venue">
                            <p>winner</p>
                        <p>{{ $score['winner'] }}</p>
                        </div>

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
                        <a href="{{ route('blog.details.index', $top2->slug) }}" class="event-card">
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
                            <p class="event-name">Upapologetic Sports</p>
                            <h2 class="common-heading">
                             {{ \Illuminate\Support\Str::limit($top2['headline'], 100,'....') }}
                            </h2>
                        </a>
                    @endforeach
                    <!-- event card  two -->

                </div>
                <div class="top-headline-middle headline-box" data-aos="fade-up" data-aos-duration="1000">
                    <!-- event card  big -->
                    <a href="{{ route('blog.details.index', $top1->slug) }}" class="event-card-2">
                        @foreach ($top1_images as $top1_image)
                            <div class="event-img event-img-big">
                                <img src="{{ asset('backend/' . $top1_image[0]) }}" alt="">
                            </div>
                        @endforeach
                        <p class="event-name">Unapologetic Sports</p>
                        <h2 class="common-heading common-heading-2">
                            {{ \Illuminate\Support\Str::limit($top1['headline'], 100,'....') }} 📝 </h2>
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
                                    <a href="{{ route('blog.details.index', $top1->slug) }}" class="common-heading">
                                        {{ \Illuminate\Support\Str::limit($top['headline'], 100,'....') }}
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
                                        {{ \Illuminate\Support\Str::limit($all_news['headline'], 100,'....') }}
                                    </h3>
                                    <p class="common-card-para">
                                        {!! $all_news['semi_headline'] !!}
                                    </p>
                                    <a href="{{ route('blog.details.index', $all_news->slug) }}"
                                        class="common-card-link">
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
                            <a href="{{ route('blog.details.index', $feature->slug) }}" class="featured-content">
                                @php
                                    $images = explode(',', $feature->image);
                                @endphp


                                <a href="{{ route('blog.details.index', $feature->slug) }}" class="featured-content">
                                    <div class="fetured-img">
                                        @if (isset($images[0]))
                                            <img src="{{ asset('backend/' . $images[0]) }}" alt="Event Image">
                                        @else
                                            <img src="{{ asset('backend/Sports-News.jpg') }}" alt="Default Image">
                                        @endif
                                    </div>
                                        <h3 style="color:white;">{{ \Illuminate\Support\Str::limit($feature['headline'], 100,'....') }}</h3>
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
                        @php
                                        $images = explode(',', $transfer1->image);
                                    @endphp

                                        @if (isset($images[0]))
                                            <img src="{{ asset('backend/' . $images[0]) }}" alt="Event Image">
                                        @else
                                            <img src="{{ asset('backend/Sports-News.jpg') }}" alt="Default Image">
                                        @endif


                    </div>

                    <a href="{{ route('blog.details.index', $transfer1->slug) }}"
                        class="common-heading-2 common-heading tranfer-responsive-font">
                        {{ \Illuminate\Support\Str::limit($transfer1['headline'], 100,'....') }}
                    </a>
                </div>
                <div class="transfer-news-wrapper" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                    <div class="transfer-news">
                        <div class="transfer-left">
                            <!-- tranfer content-1 -->
                            @foreach ($transfertwo as $transfer2)
                                <a href="{{ route('blog.details.index', $transfer2->slug) }}" class="transfer-content">
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

                                    <a href="{{ route('blog.details.index', $transfer2->slug) }}" class="common-heading">
                                        {{ \Illuminate\Support\Str::limit($transfer2['headline'], 100,'....') }}
                                    </a>
                                </a>
                                <!-- tranfer content-2 -->
                            @endforeach
                        </div>



                        <div class="transfer-right">
                            <!-- tranfer content-1 -->
                            @foreach ($transferthree as $transfer3)
                                <a href="{{ route('blog.details.index', $transfer3->slug) }}" class="transfer-content">
                                    @php
                                        $images = explode(',', $transfer3->image);
                                    @endphp
                                    <div class="tranfer-img">
                                        @if (isset($images[0]))
                                            <img src="{{ asset('backend/' . $images[0]) }}" alt="Event Image">
                                        @else
                                            <img src="{{ asset('backend/Sports-News.jpg') }}" alt="Default Image">
                                        @endif

                                    </div>

                                    <a href="{{ route('blog.details.index', $transfer3->slug) }}" class="common-heading">
                                        {{ \Illuminate\Support\Str::limit($transfer3['headline'], 100,'....') }}
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
