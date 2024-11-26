@extends('frontend.app')
@section('content')
    <div class="container">
        <div class="headline-card-wrapper">

            @foreach ($datas as $data)
                <!-- first card -->
                <div class="headline-single-card">
                    @php
                        $images = explode(',', $data->image);
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
                            {{ $data['headline'] }}
                        </h3>
                        <p class="common-card-para">
                            {!! $data['semi_headline'] !!}
                        </p>
                        <a href="{{ route('blog.details.index', $data->slug) }}" class="common-card-link">
                            Read More
                        </a>
                    </div>
                </div>
            @endforeach
            <!-- second card -->
            <br>
            <div style="text-align:center">{{ $datas->links() }}</div>
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection
