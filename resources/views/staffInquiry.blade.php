@extends('layouts.app')

@section('content')
    <div class = "wrapper create-pizza">
        <center><h1>Inquiry</h1></center><hr>

        <div class="row">
            <div class="col-lg-6">
                <div class="view" style="background-image: url('img/back.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;"></div>
                
            </div>
            <div class="col-lg-6">
                <form action="/confirm-inquiry" method = "GET">
                    @csrf
                <div class="row">
                    <div class="form-group col">
                        <label for="name">Employee ID:</label>
                        <input type="text" id="employee_id" name="employee_id" value="{{$employee->id}}" class="form-control" readonly>
                    </div>

                    <div class="form-group col">
                        <label for="name">Employee name:</label>
                        <input type="text" id="employee_name" name="employee_name" value="{{$employee->name}}" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Your Inquiry:</label>
                    <input type="text" id = "inquiry" name = "inquiry" class="form-control">
                </div>
                @error('inquiry')
                    <p style = "color:red;">{{$message}}</p> 
                @enderror

                    <div class="form-group">
                        <label for="name">Enter your name:</label>
                        <input type="text" id = "name" name = "name" class="form-control">
                    </div>
                    @error('name')
                        <p style = "color:red;">{{$message}}</p> 
                    @enderror

                    <div class="form-group">
                        <label for="name">Enter your address:</label>
                        <input type="text" id = "cus_Address" name = "cus_Address" class="form-control">
                        @error('cus_Address')
                            <p style = "color:red;">{{$message}}</p> 
                        @enderror
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
 
                    <input type="submit" value = "Confirm Inquiry" class="btn btn-primary" style="margin-bottom:50px;">
                </form>

                    
            </div>
            <!--<div class="col-lg-4"></div>-->
          </div> 

   
    </div>
 @endsection