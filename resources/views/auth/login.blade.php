@extends('layouts.default')

@section('content')

<div class="login">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There {{ count($errors) > 1 ? 'were some problems' : 'was a problem' }} with your input.
        </div>
    @endif
    <form method="POST" action="/auth/login" id = "login-form" class = "form-control">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" placeholder="Username" name="name">
        <input type="password" placeholder="Password" name="password" id="password" class = "form-control">
        <div class="remember-forget">
            <div class="remember-me">
                <input type="checkbox" name="remember">
                <label>Remember Me</label>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Log in" />
    </form>
    <p>Don't have an account? <a class="js-signup" href="{{ URL::to('/auth/register')}}">Sign up</a></p>
</div>

@endsection