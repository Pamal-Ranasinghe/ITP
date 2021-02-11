@extends('layouts.adminapp')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
    <center><h1>Order</h1></center> <hr>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
           <Center> <div style="border:1px solid black;font-size:20px">
                <label for="cus_code">Customer Code : </label>{{$order->customer->id}}<br>
                <label for="cus_name">Customer Name : </label>{{$order->customer->name}}<br>
                <label for="cus_tele">Customer telephone : </label>{{$order->customer->telephone}}<br>
                <label for="cus_email">Customer email : </label>{{$order->customer->email}}<br>
                <label for="cus_item">Customer Item : </label>{{$order->item->name}}<br>
                <label for="cus_units">Number of Item Units : </label>{{$order->number_of_units}}<br>
                <label for="cus_units">Date : </label>{{$order->created_at}}<br>
                <label for="cus_price">Total Price : </label>{{$order->total_price}}<br><br>

                <form action="/send-mail/{{$order->id}}" method ="GET">
                    @csrf
                    <button type="submit" class="btn btn-primary" style="margin-bottom:50px;"><i class="fa fa-envelope" aria-hidden="true"></i> Send Email</button>
                </form>
                
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success" style="margin-top:20px;">{{session()->get('message')}}</div>
            @endif
        </Center>



        </div>
        <div class="col-lg-2">
            <center><form action="/completed/{{$order->id}}" method = "GET"> 
                <button style="float: right;" class = "btn btn-info" type = "submit" >Mark as Completed</button>
            </form>
            
        </center>
            </div>          
        </div>
        
      </div> 
@endsection