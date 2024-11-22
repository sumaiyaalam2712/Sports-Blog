@extends('frontend.app')
@section('content')
    <!-- main area starts -->
    <main>
        <!-- log in section start -->
        <section class="log-in-section common-padding">
            @if (session('error'))
                <div class="alert alert-success">
                    {{ session('error') }}
                </div>
            @endif
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
                    @error('email')
                        <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                    @enderror
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    @error('password')
                        <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                    @enderror
                    <button class="submit-btn" type="submit">Login</button>
            </div>
            </form>

            <p class="login-signup-remainder">
                Click “Sign in” to agree to Unpologeticsport’s Terms of
                Service and acknowledge that Unpologeticsport’s Privacy
                Policy applies to you.
            </p>
            </div>
        </section>
        <!-- log in section End -->
    </main>
    <!-- main area ends -->
@endsection
