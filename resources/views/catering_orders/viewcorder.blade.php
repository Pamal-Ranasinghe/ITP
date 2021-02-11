@extends('layouts.adminapp')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

    <div class=" bg-light container-fluid">
        <div class="row">
            <div class="col-sm-8 offset-sm-3">
                <br><br>
                <a href="/show_corders" class="btn btn-primary">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-backspace-fill"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 
                            2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 
                            0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z" />
                    </svg></a>
                <br>
                <div class="text-center">
                    <h3>Booking & Customer Detail</h3>
                </div>


                <div class="bg-white shadow mx-auto" style="border-radius: 21px 21px 21px 21px;">

                    <form>
                        <div class="col-sm-8 offset-sm-3">
                            <br>
                            <br>
                            <div class="form-row">
                                <label class="col-sm-4 col-form-label" for="id">Customer ID</label>
                                <input readonly id="id" class="form-control col-sm-5" name="id"
                                    value={{$corders->customer->id}}>
                            </div>
                            <br>
                            <div class="form-row">
                                <label class="col-sm-4 col-form-label" for="p_name">Name</label>
                                <input readonly id="name" class="form-control col-sm-5" name="name"
                                    value={{$corders->customer->name}}>
                            </div>
                            <br>
                            <div class="form-row">
                                <label class="col-sm-4 col-form-label" for="description">Customer
                                    contact</label>
                                <input readonly id="telephone" class="form-control col-sm-5" name="telephone"
                                    value={{$corders->customer->telephone}}>
                            </div>
                            <br>
                            <div class="form-row">
                                <label class="col-sm-4 col-form-label" for="price">Email</label>
                                <input readonly id="email" class="form-control col-sm-5" name="email"
                                    value={{$corders->customer->email}}>
                            </div>
                            <br>
                            <div class="form-row">
                                <label class="col-sm-4 col-form-label" for="price">Customer Address</label>
                                <input readonly id="address" class="form-control col-sm-5" name="address"
                                    value={{$corders->customer->address}}>
                            </div>
                            <br>
                            <div class="form-row">
                                <label class="col-sm-4 col-form-label" for="catering_package_id">Package ID</label>
                                <input readonly id="catering_package_id" class="form-control col-sm-5" name="catering_package_id"
                                    value={{$corders->catering_package_id}}>
                            </div>
                            <br>
                            <div class="form-row">
                                <label class="col-sm-4 col-form-label" for="name">Selected Package </label>
                                <input readonly id="name" class="form-control col-sm-5" name="name"
                                    value={{$corders->name}}>
                            </div>
                            <br>
                            <div class="form-row">
                                <label class="col-sm-4 col-form-label" for="date_time">Date & Time</label>
                                <input readonly id="date_time" class="form-control col-sm-5" name="date_time"
                                    value={{$corders->date_time}}>
                            </div>
                            <br>
                            <div class="form-row">
                                <label class="col-sm-4 col-form-label" for="location">Event Location</label>
                                <input readonly id="location" class="form-control col-sm-5" name="location"
                                    value={{$corders->location}}>
                            </div>                 
                            <br>
                            <div class="form-row">
                                <label class="col-sm-4 col-form-label" for="guests">Guests</label>
                                <input readonly id="guests" class="form-control col-sm-5" name="guests"
                                    value={{$corders->guests}}>
                            </div>
                            <br>
                            <div class="form-row">
                                <label class="col-sm-4 col-form-label" for="amount">Bill amount</label>
                                <input readonly id="amount" class="form-control col-sm-5" name="amount"
                                    value={{$corders->amount}}>
                            </div>
                            <br>
                            <br>
                        </div>
                    </form>
                </div>
                <br><br>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------End of  View-------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------------->
</div>

</div>
</div>@endsection