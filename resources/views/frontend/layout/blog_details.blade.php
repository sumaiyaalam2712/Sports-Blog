<!-- main area starts -->
@extends('frontend.app')
@section('content')
    <main>
        <!-- blog-details section start -->
        <section class="blog-details-section common-padding">
            <div class="blog-content-wrapper">
                <div class="blog-header">
                    <p class="blog-event">UnapologeticSports</p>
                    <h1>{{ $detail['headline'] }}
                    </h1>

                    <h2>{{ $detail['sub_headline'] }}</h2>
                    <div class="blog-author-time">
                        <div class="blog-post-time">
@php
    $date=$detail->creation_period=\Carbon\Carbon::parse($detail->creation_period)->toTimeString();
@endphp
<p>{{ $date }}</p>

</div>
                        <div class="blog-post-time">
                            @php
                            $date=$detail->creation_period=\Carbon\Carbon::parse($detail->creation_period)->toFormattedDayDateString();
                        @endphp
                        <p>{{ $date }}</p>
                        </div>
                    </div>
                </div>
                <div class="blog-mainpost-relatedpost">
                    <!-- blog-mai-post area -->
                    <div class="blog-main-post">

                        @foreach ($detail_image as $detailss_image)
                            <div class="blog-feture-img">
                                @if (count($detailss_image) > 0)
                                    <img src="{{ asset('backend/' . $detailss_image[0]) }}" alt="">
                                @else
                                    <img src="{{ asset('backend/Sports-News.jpg') }}" alt="Default Image">
                                @endif

                            </div>
                        @endforeach
                        @php
                            $images = explode(',', $detail->image);
                        @endphp

                        @php
                            $description = $detail->description;
                            $half_length = floor(strlen($description) / 2);
                            $start_description = substr($description, 0, $half_length);
                            $end_description = substr($description, $half_length);

                        @endphp

                        <p class="blog-post-details">
                            {!! $start_description !!}
                        </p>
                        <div class="blog-feture-img blog-feture-img-2">
                            @if (isset($images[1]))

                                    <img src="{{ asset('backend/' . $images[1]) }}" alt="">
                            @else
                                <img src="{{ asset('backend/Sports-News.jpg') }}" alt="Default Image" srcset="">
                            @endif

                        </div>



                        <p class="blog-post-details">
                            {!! $end_description !!}
                        </p>
                        <br>

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
                                @foreach ($relateds as $related)
                                    <!-- related post 1 -->
                                    <a href="{{ route('blog.details.index', $related->slug) }}" class="related-single-post">
                                        <div class="related-blog-img">
                                            @php
                                                $images = explode(',', $related->image);
                                            @endphp
                                            @if (isset($images[0]))
                                                <img src="{{ asset('backend/' . $images[0]) }}" alt="Event Image"
                                                    srcset="">
                                            @else
                                                <img src="{{ asset('backend/Sports-News.jpg') }}" alt="Default Image"
                                                    srcset="">
                                            @endif
                                        </div>

                                        <p class="common-heading">
                                            {{ $related['headline'] }}
                                        </p>
                                    </a>
                                @endforeach
                                <!-- related post 2 -->

                                <!-- related post 3 -->


                                <span>{{ $relateds->links() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details section end -->
    </main>
@endsection
