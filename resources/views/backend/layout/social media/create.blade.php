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
                        <h5 class="mb-0">Social Media Links</h5>
                        <small class="text-muted float-end">Social Media</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('social.media.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Name</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="name" value="{{ old('name') }}"
                                    placeholder="Name" />
                            </div>
                            @error('name')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Logo</label>
                                <input type="file" class="form-control dropify" id="basic-default-fullname"
                                    name="logo" placeholder="Logo" />
                            </div>
                            @error('logo')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Link</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="link" value="{{ old('link') }}"  placeholder="Link" />
                            </div>
                            @error('link')
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
            $(document).ready(function() {
                $('.dropify').dropify();
            });
        </script>
    @endpush
@endsection
