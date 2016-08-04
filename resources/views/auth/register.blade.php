@extends('layouts.default')

@section('content')
@if (session('flash_message'))
    <div class = "alert {{ session('flash_type') }}">
        {{ session('flash_message') }}
    </div>
@endif
<div class="signup">
    <div>
        <form method="POST" action="{{ URL::to('/auth/register') }}" id="register-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="name-field">
                <div>
                    <input type="text" name="name" placeholder="User Name" />
                </div>
            </div>
            <input type="email" name="email" placeholder="Email Address" />
            {{-- <input type="email" name="confirm_email" placeholder="Confirm Email Address" /> --}}
            <div class="password-field form-group">
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Password"
                    data-toggle="password"
                    data-eye-class="fa"
                    data-eye-open-class="fa-eye"
                    data-eye-close-class="fa-eye-slash"
                />
            </div>
            <input type="submit" value="Submit">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>

    <p>Already have an account? <a class="js-login" href="{{ URL::to('/auth/login') }}">Log in</a></p>
</div>
@endsection