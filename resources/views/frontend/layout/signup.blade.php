@extends('frontend.app')
@section('content')
    <!-- main area starts -->
    <main>
        <!-- log in section start -->
        <section class="log-in-section common-padding">
            <div class="log-in-content-wrapper">
                <h2>Join Unapologeticsports</h2>
                <form action="{{ route('register.store') }}" method="POST" id="signUpForm">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Set Password</label>
                        <input type="password" id="password" name="password" placeholder="Write Password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="password_confirmation"
                            placeholder="Confirm Password" required>
                    </div>
                    <div>
                        <button class="submit-btn" type="submit">Sign Up</button>
                    </div>
                </form>
                <p class="login-signup-redirect">
                    Already have an account? <a class="create-one" href="{{ route('login') }}">Click here to log in</a>
                </p>

                <p class="login-signup-remainder">
                    Click “Sign Up” to agree to Unpologeticsport’s <a class="terms-privacy" href="#">Terms of
                        Service</a> and acknowledge that Unpologeticsport’s <a class="terms-privacy" href="#">Privacy
                        Policy</a> applies to you.
                </p>
            </div>
        </section>
        <!-- log in section End -->
    </main>
@endsection
