@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

    <div class = "wrapper create-pizza">
        <center><h1 style="margin-top: 50px">Check your details</h1></center><hr>

        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4" style="margin-bottom: 20px;">
                <form action="/update-order/{{$customer->id}}" method = "GET">
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter your name:</label>
                    <input type="text" id = "name" name = "name" class="form-control" value="{{$customer->name}}">
                    @error('name')
                        <p style = "color:red;">{{$message}}</p> 
                    @enderror   
                    </div>

                    <div class="form-group">
                        <label for="name">Enter your address:</label>
                    <input type="text" id = "cus_Address" name = "cus_Address" class="form-control" value="{{$customer->address}}">
                    @error('cus_Address')
                        <p style = "color:red;">{{$message}}</p> 
                    @enderror   
                    </div>

                    <div class="form-group">
                        <label for="name">Enter your email:</label>
                    <input type="text" id = "email" name = "email" class="form-control" value = "{{$customer->email}}">
                    @error('email')
                        <p style = "color:red;">{{$message}}</p> 
                    @enderror   
                    </div>

                    <div class="form-group">
                        <label for="name">Enter your telephone:</label>
                    <input type="text" id = "telephone_number" name = "telephone_number" class="form-control" value = "{{$customer->telephone}}">
                    @error('telephone_number')
                        <p style = "color:red;">{{$message}}</p> 
                    @enderror   
                    </div>

                         <center><button type="submit" class="btn btn-secondary"><i class="fa fa-envelope" aria-hidden="true"></i> Confirm details</button></center><br>
                </form>
                            <center><center><p>What do you wish to do ?</p></center>
                            <form action="/delete-order/{{$order->id}}" method = "GET">
                                @csrf
                                @method('DELETE')
                                <button type = "submit" class="btn btn-warning"><i class="fa fa-envelope" aria-hidden="true"></i>Delete Order</button>
                            </form><br>
                            <form action="/continue" method="GET">
                                <button type = "submit" class="btn btn-success">Continue</button>
                            </form></center>  
            </div>
            
            <div class="col-lg-4"></div>
          </div> 
    </div>
 @endsection



