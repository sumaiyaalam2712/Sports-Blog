@extends('backend.app')
@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        @if (session('success'))
            <div class="mt-3 alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-xl">
                <div class="mb-4 card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Update Sports Blog</h5>
                        <small class="text-muted float-end">Sports Blog</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('blog.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf



                            <input type="hidden" name="id" value="{{ $data['id'] }}">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Sports Type</label>
                                <select class="form-select @error('sports_type') is-invalid @enderror" name="sports_type"
                                    aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="Football"
                                        {{ old('sports_type', $data['sports_type']) == 'Football' ? 'selected' : '' }}>
                                        Football</option>
                                    <option value="BasketBall"
                                        {{ old('sports_type', $data['sports_type']) == 'BasketBall' ? 'selected' : '' }}>
                                        BasketBall</option>
                                    <option value="VolleyBall"
                                        {{ old('sports_type', $data['sports_type']) == 'VolleyBall' ? 'selected' : '' }}>
                                        VolleyBall</option>
                                    <option value="Cricket"
                                        {{ old('sports_type', $data['sports_type']) == 'Cricket' ? 'selected' : '' }}>
                                        Cricket</option>
                                </select>
                                @error('sports_type')
                                    <div class="invalid-feedback" style="color:darkslateblue; font-weight:bold;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">News Type</label>
                                <select class="form-select @error('news_type') is-invalid @enderror" name="news_type"
                                    aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="general"
                                        {{ old('news_type', $data['news_type']) == 'general' ? 'selected' : '' }}>general
                                    </option>
                                    <option value="top"
                                        {{ old('news_type', $data['news_type']) == 'top' ? 'selected' : '' }}>top</option>
                                    <option value="featured"
                                        {{ old('news_type', $data['news_type']) == 'featured' ? 'selected' : '' }}>featured
                                    </option>
                                    <option value="transfer news"
                                        {{ old('news_type', $data['news_type']) == 'transfer news' ? 'selected' : '' }}>
                                        transfer news</option>
                                </select>
                                @error('news_type')
                                    <div class="invalid-feedback" style="color:darkslateblue;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Headline</label>
                                <textarea id="basic-default-message" name="headline" class="form-control" placeholder="Headline">{{ $data['headline'] }}</textarea>
                            </div>
                            @error('headline')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Sub Headline</label>
                                <textarea id="basic-default-message" name="sub_headline" class="form-control" placeholder="Sub Headline">{{ $data['sub_headline'] }}</textarea>
                            </div>
                            @error('sub_headline')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Slug</label>
                                <textarea id="basic-default-message" name="slug" class="form-control" placeholder="Sub Headline">{{ $data['slug'] }}</textarea>
                            </div>
                            @error('sub_headline')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Description</label>
                                <textarea id="description" style="height:400px;" name="description" class="form-control form-control-lg"
                                    placeholder="Description">"{!! $data['description'] !!}"</textarea>
                            </div>
                            @error('description')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

@php
    $images=explode(',',$data->image)
@endphp
@foreach($images as $image)
<div class="mb-3">
    <label class="form-label" for="basic-default-fullname">Images</label>
    <input type="file"
class="form-control dropify"
id="image"
name="image[]"
data-default-file="{{ asset('backend/' . $image) }}"  />
</div>
@endforeach


                            <button type="submit" class="btn btn-primary">POST</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @push('scripts')
        <script>
            ClassicEditor.create(document.querySelector('#description'))
                .catch(error => {
                    console.error(error);
                });
        </script>


        <script>
            $(document).ready(function() {
                $('.dropify').dropify();
            });
        </script>
    @endpush
@endsection
