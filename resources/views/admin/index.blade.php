@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 50px;margin-bottom:50px;">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center> {{ __('You are logged in as an admin!') }}</center>

                    <form action="/view-all-orders" method="GET"><input type="submit" value = "Take away orders" class = "btn btn btn-danger"></form><br>
                    <form action="/show_corders" method="GET"><input type="submit" value = "Catering orders" class = "btn btn btn-danger"></form><br>
                    <form action="/admin/delivery" method="GET"><input type="submit" value = "Delivery order" class = "btn btn btn-danger"></form><br>
                    <input type="submit" value = "Bill and Payments" class = "btn btn btn-danger"><br><br>
                    <form action="/show-food-and-bev-items" method="GET"><input type="submit" value = "Foods and Beverages" class = "btn btn btn-danger"></form><br>
                    <form action="/get-all-employees" method="GET"><input type="submit" value = "Employee Management" class = "btn btn btn-danger"></form><br>
                    <form action="/package/add" method="GET"><input type="submit" value = "Packages" class = "btn btn btn-danger"></form><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection