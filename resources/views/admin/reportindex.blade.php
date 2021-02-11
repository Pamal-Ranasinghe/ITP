@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 50px;margin-bottom:250px;">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center> {{ __('Payment and bills dashboard') }}

                        <form action="/all-take-to-rep" method="GET"><input type="submit" value = "Normal orders" class = "btn btn btn-danger" style="margin-top:20px;"></form><br>
                        <form action="/all-catering-to-rep" method="GET"><input type="submit" value = "Catering orders" class = "btn btn btn-danger"></form><br>
                   
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection