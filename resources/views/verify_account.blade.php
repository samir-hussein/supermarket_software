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
                    <button class="btn btn-info"><a style="text-decoration:none;color:white" href="/api/user/verify-account/{{$token}}">Verify Account</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection