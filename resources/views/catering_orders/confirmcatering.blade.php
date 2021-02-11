@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <center>
        <h1></h1>
    </center>


    <div class="contain">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form action="/set-catering-order" method="GET">
                    @csrf
                    <div class="form-row">
                        <label class="col-sm-4 col-form-label" for="name">Name</label>
                        <input type="text" id="name" placeholder="Billing Name" name="name"
                            class="form-control col-sm-8" required>
                    </div>
                    <br>

                    <div class="form-row">
                        <label class="col-sm-4 col-form-label" for="cus_Address">Address</label>
                        <input type="text" id="cus_Address" placeholder="Your address" name="cus_Address"
                            class="form-control col-sm-8" required>
                    </div>
                    <br>

                    <div class="form-row">
                        <label class="col-sm-4 col-form-label" for="email">Email</label>
                        <input type="email" id="email" placeholder="Contact email" name="email"
                            class="form-control col-sm-8" pattern=".+@.+.com" required>
                    </div>
                    <br>

                    <div class="form-row">
                        <label class="col-sm-4 col-form-label" for="telephone_number">Telephone</label>
                        <input type="tel" id="telephone_number" placeholder="10 digit contact number"
                            name="telephone_number" class="form-control col-sm-8" pattern="[0-9]{10}" required>
                    </div>
                    <br>

                    <div class="form-row">
                        <label class="col-sm-4 col-form-label" for="date_and_time">Event Date</label>
                        <input type="date" id="date_and_time" name="date_and_time"
                            class="form-control col-sm-8" required>
                    </div>
                    <br>

                    <div class="form-row">
                        <label class="col-sm-4 col-form-label" for="event_location">Event Location</label>
                        <input type="text" id="event_location" placeholder="Address of venue" name="event_location"
                            class="form-control col-sm-8" required>
                    </div>
                    <br>
                    <div class="form-row">
                        <label class="col-sm-4 col-form-label" for="package_id">Package code</label>
                        <input type="text" id="package_id" name="package_id" value="{{$cpackages->id}}"
                            class="form-control col-sm-8" readonly>
                    </div>
                    <br>

                    <div class="form-row">
                        <label class="col-sm-4 col-form-label" for="catering_name">Selected package</label>
                        <input type="text" id="catering_name" name="catering_name" value="{{$cpackages->p_name}}"
                            class="form-control col-sm-8" readonly>
                    </div>
                    <br>

                    <div class="form-row">
                        <label class="col-sm-4 col-form-label" for="item_price">Each person</label>
                        <input type="text" id="item_price" name="item_price" value="{{$cpackages->price}}"
                            class="form-control col-sm-8" readonly>
                    </div>
                    <br>

                    <div class="form-row">
                        <label class="col-sm-4 col-form-label" for="event_guests">Guests </label>
                        <input type="number" id="event_guests" placeholder="Expected number of guests"
                            onchange="getPrice()" name="event_guests" class="form-control col-sm-8" required>
                    </div>
                    <br>

                    <div class="form-row">
                        <label class="col-sm-4 col-form-label" for="amount">Bill Amount</label>
                        <input readonly id="amount" placeholder="Total amount" name="amount"
                            class="form-control col-sm-8">
                    </div>
                    <script>
                        getPrice = function () {
                            var numVal1 = Number(document.getElementById("item_price").value);
                            var numVal2 = Number(document.getElementById("event_guests").value);
                            var totalValue = numVal1 * numVal2
                            document.getElementById("amount").value = totalValue.toFixed(2);
                        }
                    </script>
                    <br>
                    <div class="col text-center">
                        <input type="submit" value="Confirm Booking" class="btn btn-danger">
                    </div>
                    <br>
                </form>


            </div>
            <div class="col-lg-4"></div>
        </div>


    </div>
</div>
@endsection