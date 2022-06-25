@extends('layouts.main')

@section('content')
<div>
    <div class="card">
        <div class="card-header">
            <div class="form-group">
                <label for="search" class=" form-control-label">Add Product</label>
                <input type="text" id="search" placeholder="Enter Product Code..." class="form-control col-3">
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Code</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" class="form-control">
                        </td>
                        <td>
                            <input type="text" class="form-control">
                        </td>
                        <td>
                            <input type="text" class="form-control">
                        </td>
                        <td>
                            <input type="text" class="form-control">
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                      <td>Total Price</td>
                      <td>180 EGP</td>
                    </tr>
                    <tr>
                        <td>Make Discount</td>
                        <td>
                            <label for="search" class=" form-control-label">Value %</label>
                            <input type="text" class="form-control mb-2" placeholder="Discount Value">
                            <button class="btn btn-dark">Apply Discount</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Total Price After Discount</td>
                        <td>180 EGP</td>
                    </tr>
                </tfoot>
            </table>
            <button class="btn btn-primary">Print Receipt</button>
        </div>
    </div>
</div>
@endsection
