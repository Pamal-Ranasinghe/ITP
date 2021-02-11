<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>TakeAway</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <style>
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
  </style>
  <!-- Custom styles for this template -->
  <link href="{{asset('css/product.css')}}" rel="stylesheet">

</head>

<body>
                                                

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark ">
    <a class="navbar-brand" href="#">YummyHut</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
      aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Take away</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/packages">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Catering</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Menu</a>
          <div class="dropdown-menu" aria-labelledby="dropdown09">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      
    
  
    </div>
  </nav>

  
 


  

 
  

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>


    @extends('layouts.packageTwo')
    @section('content')
    <section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                
            <br><br><br>
            <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
                <div class="card">
                    <div class="card-header p-4">
                       
                        <div class="float-right">
                            <h4 class="mb-0">Order ID : #1001</h4>
                        </div>
                    </div>
                   
                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        
                                        <th>Package Name</th>
                                        <th class="right">Price</th>
                                        <th class="center">Qty</th>
                                        <th class="right">Discount</th>
                                        <th class="right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="center">1</td>
                                        
                                        <td class="left">{{session('packName')}}</td>
                                    <td class="right">Rs.{{session('price')}}</td>
                                        <td class="center">{{session('qty')}} packs</td>
                                    <td class="right">Rs.{{session('discount')}}</td>
                                        <td class="right">Rs.{{session('total')}}/=</td>
                                    </tr>
                                   
                                    </tbody>
                                </table>
                                <a href="/packages" class="back"> <button  type="button" class="btn btn-danger"> Cancel</button></a>
                                <a href="#" class="back"><button  type="button" class="btn btn-primary"> Order</button></a>
                            </div>
                        </div>
                    </div>
                   <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
    
    
                </div>
      

</section>
@endsection



</body>

</html>





