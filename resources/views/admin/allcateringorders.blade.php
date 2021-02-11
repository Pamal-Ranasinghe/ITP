@extends('layouts.adminapp')

@section('content')

    <center><h1>All Catering Orders</h1></center> 
    <div class="row">
      <div class="col-lg-5"></div>
      <div class="col-lg-5"></div>
      <div class="col-lg-2">
        <form action="/search-by-catering-package-name" method="get">
          <h1 class="h3"><input class="form-control" type="search" name="search" placeholder="Search by order type"
                  aria-label="Search" title="search"></h1>

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
                  <th>Name</th>
                  <th>date_time</th>
                  <th>guest</th>
                  <th>Amount</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach($orders as  $order)
              <tbody>
                <tr> 
                  <td>{{$order->id}}</td>
                  <td>{{$order->name}}</td>
                  <td>{{$order->date_time}}</td>
                  <td>{{$order->guests}}</td>
                  <td>{{$order->amount}}</td>
                  <td> 
                    <form action="/delete-one-order-income-catering/{{$order->id}}" method = "GET" >
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
          <form action="/calc-total-catering-income" method = "GET">
            @csrf
            <center><button type="submit" class="btn btn-warning" ><i class="fa fa-plus-square-o" aria-hidden="true"></i> Calculate income</button></center><br>
          </form>
        </div>
        <div>
            <form action="/get-all-catering-income" method = "GET">
              @csrf
              <center><button type="submit" class="btn btn-warning" ><i class="fa fa-file" aria-hidden="true"></i>
                Catering Order Report</button></center><br>
            </form>
          </div>
      
      </div>
      </div> 
@endsection