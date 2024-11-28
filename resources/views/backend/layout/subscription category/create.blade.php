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
                        <h5 class="mb-0">Subscription Category</h5>
                        <small class="text-muted float-end">subscription</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('subscription.category.create') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Package Name</label>
                                <select class="form-select" name="package_name" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="Monthly" {{ old('package_name') == 'Monthly' ? 'selected' : '' }}>Monthly</option>
                                    <option value="For 3 Months" {{ old('package_name') == 'For 3 Months' ? 'selected' : '' }}>For 3 Months</option>
                                    <option value="For 6 Months" {{ old('package_name') == 'For 6 Months' ? 'selected' : '' }}>For 6 Months</option>
                                    <option value="Annually" {{ old('package_name') == 'Annually' ? 'selected' : '' }}>Annually</option>
                                </select>
                                @error('package_name')
                                    <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Package Category</label>
                                <select class="form-select" name="package_category" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="Month" {{ old('package_category') == 'Month' ? 'selected' : '' }}>Month</option>
                                    <option value="3 Months" {{ old('package_category') == '3 Months' ? 'selected' : '' }}>3 Months</option>
                                    <option value="6 Months" {{ old('package_category') == '6 Months' ? 'selected' : '' }}>6 Months</option>
                                    <option value="year" {{ old('package_category') == 'year' ? 'selected' : '' }}>year</option>
                                </select>
                                @error('package_category')
                                    <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Package Duration</label>
                                <select class="form-select" name="package_duration" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="30" {{ old('package_duration') == '30' ? 'selected' : '' }}>30</option>
                                    <option value="90" {{ old('package_duration') == '90' ? 'selected' : '' }}>90</option>
                                    <option value="180" {{ old('package_duration') == '180' ? 'selected' : '' }}>180</option>
                                    <option value="365" {{ old('package_duration') == '365' ? 'selected' : '' }}>365</option>
                                </select>
                                @error('package_duration')
                                    <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Description</label>
                                <textarea id="description" height="400px" name="description" class="form-control form-control-lg" placeholder="Description">{{ old('description') }}</textarea>
                            </div>
                            @error('description')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Rate</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="rate" placeholder="Price" value="{{ old('rate') }}" />
                            </div>
                            @error('rate')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Saving Percentage</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="package_saving" placeholder="Saving percentage in the package" value="{{ old('package_saving') }}" />
                            </div>
                            @error('package_saving')
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
    @endpush
@endsection
