@extends('layouts.app')

@section('content')
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4">
                            <img src="{{ asset('/') }}plugins/img/logo-bsi.png" alt="Image" height="100">
                        </div>
                        <div class="d-flex justify-content-center py-4">
                            <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                                <span class="d-none d-lg-block">E-Layanan BSI</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                                    {{-- <p class="text-center small">Enter username & password to login</p> --}}
                                </div>

                                <form class="row g-3 needs-validation" novalidate method="POST"
                                    action="{{ route('login') }}">
                                    @csrf

                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                id="yourUsername" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" id="yourPassword"
                                            required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="true"
                                                id="rememberMe" {{ old('rememberMe') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Don't have account?
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}">Register</a>
                                            @endif
                                        </p>
                                        <p class="small mb-0">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </p>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
