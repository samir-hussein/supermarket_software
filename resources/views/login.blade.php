@extends('layouts.auth')

@section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">

            <div class="login-content">
                <div class="login-form">
                    <div class="login-logo">
                        <a href="/" class="d-flex align-items-center justify-content-center">
                            <img class="align-content" src="{{ asset('images/logo.png') }}" alt="logo" height="70" width="70">
                            <span class="ml-2" style="color: #222222;font-weight:bold">Market</span>
                        </a>
                    </div>
                    <form id="login-form">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="remember_me" value="1"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="/forget-password">Forgotten Password?</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success mb-3">Sign in
                        </button>
                        <button type="button" class="btn btn-danger mb-3"><a href="#" style="color:white">continue with google</a></button>
                        <a href="/sign-up">Sign Up --></a>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
