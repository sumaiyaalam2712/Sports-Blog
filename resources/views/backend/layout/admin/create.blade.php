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
                        <h5 class="mb-0">Create Admin</h5>
                        <small class="text-muted float-end">Create Admin</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">name</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="name"
                                    placeholder="name" />
                            </div>
                            @error('name')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">email</label>
                                <input type="email" class="form-control" id="basic-default-fullname" name="email"
                                    placeholder="email" />
                            </div>
                            @error('email')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">password</label>
                                <input type="password" class="form-control" id="basic-default-fullname" name="password"
                                    placeholder="password" />
                            </div>
                            @error('password')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror


                            <input type="hidden" name="role" value="admin">

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Phone</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="phone"
                                    placeholder="Phone" />
                            </div>
                            @error('phone')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Photo</label>
                                <input type="file" class="form-control dropify" id="basic-default-fullname"
                                    name="photo" placeholder="Photo" />
                            </div>
                            @error('photo')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">
                                    Address
                                </label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="address"
                                    placeholder="Address" />
                            </div>
                            @error('address')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror



                            <button type="submit" class="btn btn-primary">SAVE </button>
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
