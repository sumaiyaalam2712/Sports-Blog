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
                        <h5 class="mb-0">Update User Info</h5>
                        <small class="text-muted float-end">Update User</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data['id'] }}">

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">name</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="name"
                                    value="{{ $data['name'] }}" />
                            </div>
                            @error('name')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">email</label>
                                <input type="email" class="form-control" id="basic-default-fullname" name="email"
                                    value="{{ $data['email'] }}" />
                            </div>
                            @error('email')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror






                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Phone</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="phone"
                                    value="{{ $data['phone'] }}" />
                            </div>
                            @error('phone')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror




                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">
                                    Address
                                </label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="address"
                                  value="{{ $data['address'] }}" />
                            </div>
                            @error('address')
                                <strong><span style="color:darkslateblue">{{ $address }}</span></strong>
                            @enderror



                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Subscription Status</label>
                                <select class="form-select" name="subscription_status" aria-label="Default select example">
                                    <option selected>{{ old('sports_type') ?: 'Open this select menu' }}</option>
                                    <option value="active" {{ old('subscription_status') == 'active' ? 'selected' : '' }}>active</option>
                                    <option value="inactive" {{ old('subscription_status') == 'inactive' ? 'selected' : '' }}>inactive</option>
                                </select>
                                @error('subscription_status')
                                    <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update </button>
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
