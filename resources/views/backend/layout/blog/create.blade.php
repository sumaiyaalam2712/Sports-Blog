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
                        <h5 class="mb-0">Create New Sports Blog</h5>
                        <small class="text-muted float-end">Sports Blog</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('blog.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Sports Type</label>
                                <select class="form-select" name="sports_type" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="Football">Football</option>
                                    <option value="BasketBall">BasketBall</option>
                                    <option value="VolleyBall">VolleyBall</option>
                                    <option value="Cricket">Cricket</option>
                                </select>
                                @error('sports_type')
                                    <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">News Type</label>
                                <select class="form-select @error('news_type') is-invalid @enderror" name="news_type"
                                    aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="general">general</option>
                                    <option value="top">top</option>
                                    <option value="featured">featured</option>
                                    <option value="transfer news">transfer news</option>
                                </select>
                                @error('news_type')
                                    <div class="invalid-feedback" style="color:darkslateblue;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Headline</label>
                                <textarea id="basic-default-message" name="headline" class="form-control" placeholder="Headline"></textarea>
                            </div>
                            @error('headline')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Sub Headline</label>
                                <textarea id="basic-default-message" name="sub_headline" class="form-control" placeholder="Sub Headline"></textarea>
                            </div>
                            @error('sub_headline')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Description</label>
                                <textarea id="description" style="height:400px;" name="description" class="form-control form-control-lg"
                                    placeholder="Description"></textarea>
                            </div>
                            @error('description')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Photo</label>
                                <input type="file" class="form-control dropify" id="basic-default-fullname"
                                    name="image" placeholder="Upload Photo" />
                            </div>
                            @error('image')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

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
