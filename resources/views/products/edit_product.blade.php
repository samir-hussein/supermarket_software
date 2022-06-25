@extends('layouts.main')

@section('header','Dashboard / Product / Edit')

@section('content')
<div class="card w-75 m-auto">
    <div class="card-header">
        <strong>Update</strong> Product
    </div>
    <div class="card-body card-block">
        <form>
            <div class="form-group">
                <label for="name" class="form-control-label">Product Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Product Name..." class="form-control">
            </div>

            <div class="form-group">
                <label for="name" class="form-control-label">Product Code</label>
                <input type="text" id="name" name="name" placeholder="Enter Product Code..." class="form-control">
            </div>

            <div class="form-group">
                <label for="name" class="form-control-label">Product Amount</label>
                <input type="text" id="name" name="name" placeholder="Enter Product Amount..." class="form-control">
            </div>

            <div class="form-group">
                <label for="name" class="form-control-label">Product Price</label>
                <input type="text" id="name" name="name" placeholder="Enter Product Price..." class="form-control">
            </div>

            <div class="form-group">
                <label for="name" class="form-control-label">Product Discount</label>
                <input type="text" id="name" name="name" placeholder="Enter Product Discount..." class="form-control">
            </div>
        </form>
    </div>
    <div class="card-footer">
        <div uk-spinner class="d-none" id="spinner"></div>

        <button id="submit" type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Update
        </button>
    </div>
</div>
@endsection