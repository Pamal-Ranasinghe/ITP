
@php

$orderId = session('orderId')

@endphp

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{asset('css/product.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>

<style>

.pagebody{

  background-color: #343a40ad;
}
  
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
 
  <!-- Custom styles for this template -->


</style>
</head>
<body>

  
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark ">
    <a class="navbar-brand" href="/">YummyHut</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
      aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active ">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/show-item">Foods and Beverages</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/packages"> Packages</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/show-packages"> Catering</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/show-staff"> Our Staff</a>
        </li>      
    
  
    </div>
  </nav>
  <div class="pagebody">

@extends('layouts.delivery')

@section('content')

<center><h2>Delivery Information</h2></center>

<div class="row" >
<div class="col-75">
  <div class="container">
  <form action="/delivery/{{session('orderId')}}/{{session('total')}}/{{session('quan')}}" method="get">
    @csrf
      <div class="row">
        <div class="col-50">
        <h5><strong>Billing Address</strong></h5>
          <label for="fname"><i class="fa fa-user"></i>Name</label>
          <input type="text" id="fname" name="name" placeholder="Kaveen Akash" required>
          <label for="email"><i class="fa fa-envelope"></i> Email</label>
          <input type="text" id="email" name="email" placeholder="kaveen@example.com" required>
          <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
          <input type="text" id="adr" name="address" placeholder="542 W. 15th Malabe" required>
          

          <div class="row">
            <div class="col-50">
              <label for="state"><i class="fa fa-phone"></i> Phone</label>
              <input type="number" id="state" name="phone" placeholder="767205950" required>
            </div>
            
          </div>
        </div>

        <div class="col-50">
          <h5><strong>Payment</strong></h5>
          <label for="fname">Payment Methods</label>
          <select name="payment" id="cars">
              <option value="Cash on Delivery">Cash on Delivery</option>
          </select>
        </div>
        
      </div>
      
      <input type="submit" value="Submit" class="btn" id="myBtn">
    </form>
  </div>
</div>
<div class="col-25">
  <div class="container">
    <h5><b>Package</b><span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h5>
    <p>{{session('packName')}} <span class="price">{{session('orderId')}} </span></p>
  
    <hr>
  <p>Total <span class="price" style="color:black"><b>Rs.{{session('total')}}/=</b></span></p>
  </div>
</div>
</div>



@endsection

</div>


</body>
</html>







  

