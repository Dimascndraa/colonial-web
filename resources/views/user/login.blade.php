@extends('layouts.auth')
@section('content')
<div class="col col-md-6 col-lg-7 hidden-sm-down">
    <h2 class="fs-xxl fw-500 mt-4 text-white">
        {{ $about->name }}
        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
            {!! $about->short_descript !!}
        </small>
    </h2>
    <a href="/pages/team" class="fs-lg fw-500 text-white opacity-70">Learn more &gt;&gt;</a>
    <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
        <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
            Find us on social media
        </div>
        <div class="d-flex flex-row opacity-70">
            <a href="https://www.facebook.com/{{ $socialMedia->facebook }}" class="mr-2 fs-xxl text-white">
                <i class="fab fa-facebook-square"></i>
            </a>
            <a href="https://www.instagram.com/{{ $socialMedia->instagram }}" class="mr-2 fs-xxl text-white">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://wa.me/{{ $socialMedia->whatsapp }}" class="mr-2 fs-xxl text-white">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://www.twitter.com/{{ $socialMedia->twitter }}" class="mr-2 fs-xxl text-white">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.youtube.com/{{ $socialMedia->youtube }}" class="mr-2 fs-xxl text-white">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </div>
</div>
<div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
    <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
        Secure login
    </h1>
    <div class="card p-4 rounded-plus bg-faded">
        <form id="js-login" novalidate="" action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <input type="text" name="username" value="{{ old('username') }}" required autofocus
                    class="form-control form-control-lg" placeholder="your username" required>
                <div class="invalid-feedback">No, you missed this one.</div>
                <div class="help-block">Your unique username to app</div>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" required autocomplete="current-password"
                    class="form-control form-control-lg" placeholder="password">
                <div class="invalid-feedback">Sorry, you missed this one.</div>
                <div class="help-block">Your password</div>
            </div>
            <div class="form-group text-left">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rememberme">
                    <label class="custom-control-label" for="rememberme"> Remember me for
                        the next 30 days</label>
                </div>
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-danger" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
            <div class="row no-gutters">
                <div class="col-lg-12 pl-lg-1 my-2">
                    <button id="js-login-btn" type="submit" class="btn btn-danger btn-block btn-lg">Secure
                        login</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection