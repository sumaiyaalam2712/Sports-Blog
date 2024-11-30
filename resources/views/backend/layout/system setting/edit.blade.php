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
                        <h5 class="mb-0">System Setting Update</h5>
                        <small class="text-muted float-end">System Setting Update</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('system.setting.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf

<input type="hidden" name="id">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Section</label>
                                <select class="form-select @error('section') is-invalid @enderror" name="section"
                                aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                    <option selected>Open this select menu</option>
                                    <option value="Logo" {{ old('section') == 'Logo' ? 'selected' : '' }}>Logo</option>
                                    <option value="Bio" {{ old('section') == 'Bio' ? 'selected' : '' }}>Bio</option>

                                </select>
                                @error('section')
                                    <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                                @enderror
                            </div>




                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image</label>
                                <input type="file" class="form-control dropify" id="basic-default-fullname"
                                    name="image" placeholder="image" />
                            </div>
                            @error('image')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="description" value="{{ $data['description'] }}" >Description</label>
                                <textarea id="description" style="height:400px;" name="description" class="form-control form-control-lg" placeholder="Description">{{ $data['description'] }}</textarea>
                            </div>
                            @error('description')
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
