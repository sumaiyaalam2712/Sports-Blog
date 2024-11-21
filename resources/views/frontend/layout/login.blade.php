@extends('frontend.app')
@section('content')
    <!-- main area starts -->
    <main>
        <!-- log in section start -->
        <section class="log-in-section common-padding">
            <div class="log-in-content-wrapper">
                <div class="login-form-header">
                    <h2>Welcome back.</h2>
                    <p class="login-signup-redirect">
                        No account? <a class="create-one" href="{{ route('register') }}">Create one</a>
                    </p>
                </div>
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <label for="remember">remember</label>
                        <input type="checkbox" id="remember" name="remember">
                    </div>
                    <div>
                        <button class="submit-btn" type="submit">Login</button>
                    </div>
                </form>

                <p class="login-signup-remainder">
                    Click “Sign in” to agree to Unpologeticsport’s <a class="terms-privacy" href="#">Terms of
                        Service</a> and acknowledge that Unpologeticsport’s <a class="terms-privacy" href="#">Privacy
                        Policy</a> applies to you.
                </p>
            </div>
        </section>
        <!-- log in section End -->
    </main>
    <!-- main area ends -->
@endsection
