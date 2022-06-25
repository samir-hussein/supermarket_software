@extends('layouts.main')

@section('header','Dashboard / Profile')

@section('content')
<div class="col-xl-4 col-lg-6">
    <section class="card">
        <div class="twt-feed blue-bg">
            <div class="corner-ribon black-ribon">

            </div>
            <div class="fa fa-twitter wtt-mark"></div>

            <div class="media">
                <a href="">
                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt=""
                        src="{{ asset('dashboard/images/admin.jpg') }}">
                </a>
                <div class="media-body">
                    <h2 class="text-white display-6">name</h2>
                    <p class="text-light">email</p>
                    <p class="text-light">phone number</p>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="col-xl-8 col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Change</strong> Your Name
        </div>
        <div class="card-body card-block">
            <form id="name-form" action="" method="post" class="">
                <input type="hidden" value="" id="id">
                <div class="form-group"><label for="name" class=" form-control-label">Name</label><input type="text"
                        id="name" name="name" placeholder="Enter Name..." class="form-control">
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button id="submit-name" type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <strong>Change</strong> Your Phone
        </div>
        <div class="card-body card-block">
            <form id="phone-form" action="" method="post" class="">
                <input type="hidden" value="" id="id">
                <div class="form-group"><label for="phone" class=" form-control-label">Phone</label><input type="text"
                        id="phone" name="phone" placeholder="Enter Phone..." class="form-control">
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button id="submit-name" type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </div>
    </div>

    <div>
        <div class="alert  alert-success alert-dismissible fade show d-none" role="alert">
            <span class="badge badge-pill badge-success mr-2">Success</span><span id="success"></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <div>
        <div class="alert  alert-danger alert-dismissible fade show d-none" role="alert">
            <span class="badge badge-pill badge-danger mr-2">Error</span><span id="error"></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <strong>Change</strong> Your Password
        </div>
        <div class="card-body card-block">
            <form id="password-form" action="" method="post" class="">
                <div class="form-group"><label for="password" class=" form-control-label">Old Password</label><input
                        type="password" id="password" name="password" placeholder="Enter Password..."
                        class="form-control">
                    <label style="color: red" class="d-none old-pass-error">* <span id="old-pass-error"></span></label>
                </div>

                <div class="form-group"><label for="new_password" class=" form-control-label">New
                        Password</label><input type="password" id="new_password" name="new_password"
                        placeholder="Enter Password..." class="form-control">
                    <label style="color: red" class="d-none new-pass-error">* <span id="new-pass-error"></span></label>
                </div>

                <div class="form-group"><label for="confirm_new_password" class=" form-control-label">Confirm New
                        Password</label><input type="password" id="confirm_new_password" name="confirm_new_password"
                        placeholder="Enter Password..." class="form-control">
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button id="submit-password" type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </div>
    </div>
</div>
@endsection