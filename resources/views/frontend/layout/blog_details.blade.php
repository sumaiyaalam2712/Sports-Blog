<!-- main area starts -->
@extends('frontend.app')
@section('content')
    <main>
        <!-- blog-details section start -->
        <section class="blog-details-section common-padding">
            <div class="blog-content-wrapper">
                <div class="blog-header">
                    <p class="blog-event"></p>
                    <h1>{{ $detail['headline'] }}
                    </h1>
                    <h2>{{ $detail['sub_headline'] }}</h2>
                    <div class="blog-author-time">
                        <div class="blog-author">
                            <div class="blog-author-img">
                                <img src="assets/images/post-author.png" alt="">
                            </div>
                            <p class="blog-author-name">
                                Peter Parker
                            </p>
                        </div>
                        <div class="blog-post-time">
                            <p>{{ $detail->creation_period }}</p>
                        </div>
                    </div>
                </div>
                <div class="blog-mainpost-relatedpost">
                    <!-- blog-mai-post area -->
                    <div class="blog-main-post">
                        <div class="blog-feture-img">
                            <img src="assets/images/blog-feature-main.png" alt="">
                        </div>
                        <p class="blog-img-moment">
                            First paired in 2011, Stephen Curry and Klay Thompson went on to become the most potent
                            shooting backcourt in NBA history.
                        </p>
                        <p class="blog-post-details">
                            {!! $detail['description'] !!}
                        </p>
                    </div>
                    <!-- related-post-area -->
                    <div class="related-blog-wrapper" data-aos="fade-left" data-aos-duration="1000">
                        <div class="related-blog-content">
                            <div class="common-banner">
                                <h3 class="common-heading-two">
                                    Related
                                </h3>
                            </div>
                            <div class="related-blog-post-wrapper">
                                <!-- related post 1 -->
                                <a href="#" class="related-single-post">
                                    <div class="related-blog-img">
                                        <img src="assets/images/related-blog-1.png" alt="" srcset="">
                                    </div>
                                    <p class="common-heading">
                                        NBA free agency 2024: Reaction and grades for the biggest
                                    </p>
                                </a>
                                <!-- related post 2 -->
                                <a href="#" class="related-single-post">
                                    <div class="related-blog-img">
                                        <img src="assets/images/related-blog-2.png" alt="" srcset="">
                                    </div>
                                    <p class="common-heading">
                                        Skylar Diggins-Smith (Seattle Storm)
                                    </p>
                                </a>
                                <!-- related post 3 -->
                                <a href="#" class="related-single-post">
                                    <div class="related-blog-img">
                                        <img src="assets/images/related-blog-3.png" alt="" srcset="">
                                    </div>
                                    <p class="common-heading">
                                        Betnijah Laney-Hamilton (New York Liberty)
                                    </p>
                                </a>

                                <a class="load-more-btn" href="#">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details section end -->
    </main>
@endsection
