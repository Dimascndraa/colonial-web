@extends('layouts.auth')
@section('content')
<div class="col-xl-12">
    <h2 class="fs-xxl fw-500 mt-4 text-white text-center">
        Register now, its free!
        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60 hidden-sm-down">
            Your registration is free for a limited time. Enjoy SmartAdmin on your mobile,
            desktop or tablet.
            <br>It is ready to go wherever you go!
        </small>
    </h2>
</div>
<div class="col-xl-6 ml-auto mr-auto">
    <div class="card p-4 rounded-plus bg-faded">
        <form id="js-login" method="post" action="{{ route('register') }}">
            @csrf
            <div class="form-group row">
                <label class="col-xl-12 form-label" for="fname">Your first and last
                    name</label>
                <div class="col-12 pr-1">
                    <input type="text" name="name" value="{{ old('name') }}" required autofocus class="form-control"
                        placeholder="Full Name" required>
                    <div class="invalid-feedback">No, you missed this one.</div>
                    @error('name')
                    <div class="text-danger ms-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Your Email</label>
                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required
                    placeholder="Email Address">
                @error('email')
                <div class="text-danger ms-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="userpassword">Pick a password: <br>Don't
                    reuse your bank password, we didn't spend a lot on security for this
                    app.</label>
                <div class="row">
                    <div class="col-6">
                        <input class="form-control" type="password" name="password" required value="{{ old('name') }}"
                            autocomplete="new-password" placeholder="Input Your Password">
                        @error('password')
                        <div class="text-danger ms-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <input id="password_confirmation" class="form-control" type="password"
                            name="password_confirmation" value="{{ old('name') }}" required
                            placeholder="Confirm Password" />
                        @error('password_confirmation')
                        <div class="text-danger ms-3">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group demo">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="terms" required>
                    <label class="custom-control-label" for="terms"> I agree to terms &
                        conditions</label>
                    <div class="invalid-feedback">You must agree before proceeding</div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4 ml-auto text-right">
                    <button id="js-login-btn" type="submit"
                        class="btn btn-block btn-danger btn-lg mt-3">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection