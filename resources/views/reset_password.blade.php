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
                    <form id="form">
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password">
                        </div>
                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password"
                                id="confirmPassword">
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection