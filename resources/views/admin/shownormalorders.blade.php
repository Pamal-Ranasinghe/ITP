@extends('layouts.adminapp')

@section('content')

    <center><h1>All Normal Orders</h1></center> 
    <div class="row">
      <div class="col-lg-5"></div>
      <div class="col-lg-5"></div>
      <div class="col-lg-2">
        <form action="/search-by-order-type" method="get">
          <h1 class="h3"><input class="form-control" type="search" name="search" placeholder="Search by order type"
                  aria-label="Search" title="search"></h1>
                  @error('record')
                    <p style="color: red">{{$message}}</p>                      
                  @enderror
          </form>
      </div>

  </div>
    <hr>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          
          <div>
            <center><p class = "msg" style="color:red">{{ session('msg') }}</p></center> 
            <table class="table">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Customer Code</th>
                  <th>Item id</th>
                  <th>Type</th>
                  <th>Number of units</th>
                  <th>Total price</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach($orders as  $order)
              <tbody>
                <tr> 
                  <td>{{$order->id}}</td>
                  <td>{{$order->customer_id}}</td>
                  <td>{{$order->item_id}}</td>
                  <td>{{$order->type}}</td>
                  <td>{{$order->number_of_units}}</td>
                  <td>{{$order->total_price}}</td>
                  <td> 
                    <form action="/delete-one-order-income/{{$order->id}}" method = "GET" >
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
      

        </div>
        <div class="col-lg-2"><div>
        <form action="/all-take-away-pdf" method = "GET">
          @csrf
          <center><button type="submit" class="btn btn-warning" ><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
            Save as PDF</button></center><br>
        </form>
       </div>
        <div>
          <form action="/cal-income" method = "GET">
            @csrf
            <center><button type="submit" class="btn btn-warning" ><i class="fa fa-plus-square-o" aria-hidden="true"></i> Calculate income</button></center><br>
          </form>
        </div>
        <div>
            <form action="/get-normal-order-income" method = "GET">
              @csrf
              <center><button type="submit" class="btn btn-warning" ><i class="fa fa-file" aria-hidden="true"></i>
                Normal Order Report</button></center><br>
            </form>
          </div>
      
      </div>
      </div> 
@endsection