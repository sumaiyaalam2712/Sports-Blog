@extends('frontend.app')
@section('content')
    <!-- main area starts -->
    <main>
        <!-- log in section start -->
        <section class="log-in-section common-padding">
            <div class="log-in-content-wrapper">
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
                <h2>Join Unapologeticsports</h2>
                <form action="{{ route('register.store') }}" method="POST" id="signUpForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Name">
                    </div>
                    @error('name')
                        <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                    @enderror
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email Address">
                    </div>
                    @error('email')
                        <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                    @enderror
                    <div class="form-group">
                        <label for="password">Set Password</label>
                        <input type="password" id="password" name="password" placeholder="Write Password">
                    </div>
                    @error('password')
                        <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                    @enderror
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="password_confirmation"
                            placeholder="Confirm Password">
                    </div>
                    @error('password_confirmation')
                        <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                    @enderror
                    <div>
                        <button class="submit-btn" type="submit">Sign Up</button>
                    </div>
                </form>
                <p class="login-signup-redirect">
                    Already have an account? <a class="create-one" href="{{ route('login') }}">Click here to log in</a>
                </p>

                <p class="login-signup-remainder">
                    Click “Sign Up” to agree to Unpologeticsport’s Terms of Service and acknowledge that Unpologeticsport’s
                    Privacy Policy applies to you</p>
            </div>
        </section>
        <!-- log in section End -->
    </main>
@endsection
