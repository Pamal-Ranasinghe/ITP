@extends('layouts.adminapp')

@section('content')

    <center><h1>Search Results</h1></center> 
    <div class="row">
      <div class="col-lg-5"></div>
      <div class="col-lg-5"></div>
      <div class="col-lg-2">
      </div>

  </div>
    <hr>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          
          <div>
            <table class="table">
              <thead>
                <tr>
                  <th>Order Code</th>
                  <th>Customer Code</th>
                  <th>Order Type</th>
                  <th>Number of units</th>
                  <th>Total Price</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach($orders as  $order)
              <tbody>
                <tr>
                  <td>{{$order->id}}</td>
                  <td>{{$order->customer_id}}</td>
                  <td>{{$order->type}}</td>
                  <td>{{$order->number_of_units}}</td>
                  <td>{{$order->total_price}}</td>
                  <td>{{$order->status}}</td>
                  <td> 
                    <form action="/view/{{$order->id}}" method = "GET" >
                      <button type="submit" class="btn btn-info">View</button>
                    </form>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
  
        </div>
        <div class="col-lg-2">
      </div> 
@endsection
