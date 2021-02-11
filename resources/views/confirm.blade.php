@extends('layouts.app')

@section('content')
    <div class = "wrapper create-pizza">
        <center><h1 >Take Away Order</h1></center><hr>

        <div class="row">
            <div class="col-lg-6">
                <div class="view" style="background-image: url('img/back.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;"></div>
                
            </div>
            <div class="col-lg-6" style="margin-left: 20px">
                <form action="/confirmOrder" method = "GET">
                    @csrf
                <div class="row">
                    <div class="form-group col">
                        <label for="name">Item code:</label>
                        <input type="text" id="item_id" name="item_id" value="{{$items->id}}" class="form-control" readonly>
                    </div>

                    <div class="form-group col">
                        <label for="name">Item name:</label>
                        <input type="text" id="item_name" name="item_name" value="{{$items->name}}" class="form-control" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col">
                        <label for="name">Item price:</label>
                        <input type="text" id="item_price" name="item_price" value="{{$items->price}}" class="form-control" readonly>
                    </div>

                    <div class="form-group col">
                        <label for="name">Enter your name:</label>
                        <input type="text" id = "name" name = "name" class="form-control">
                        @error('name')
                           <p style = "color:red;">{{$message}}</p> 
                        @enderror        
                    </div>
                </div>

                    <div class="form-group">
                        <label for="name">Enter your address:</label>
                        <input type="text" id = "cus_Address" name = "cus_Address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Enter your email:</label>
                        <input type="text" id = "email" name = "email" class="form-control">
                    </div>
                        @error('email')
                           <p style = "color:red;">{{$message}}</p> 
                        @enderror

                    <div class="form-group">
                        <label for="name">Enter your telephone number:</label>
                        <input type="text" id = "telephone_number" name = "telephone_number" class="form-control">
                    </div>
                    @error('telephone_number')
                           <p style = "color:red;">{{$message}}</p> 
                    @enderror

                    <div class="form-group">
                        <label for="name">Enter Number of units:</label>
                        <input type="number" id = "units" name = "units" class="form-control" min="1">
                    </div>
                    @error('units')
                           <p style = "color:red;">{{$message}}</p> 
                    @enderror
                    
                    <input type="submit" value = "Confirm Order" class="btn btn-primary" style="margin-bottom: 50px;">
                </form>

                    
            </div>
            <!--<div class="col-lg-4"></div>-->
          </div> 

   
    </div>
 @endsection