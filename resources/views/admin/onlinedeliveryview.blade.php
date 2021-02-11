
@extends('layouts.adminapp')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Delivery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>


      
.headerpending{

  position: absolute;
top:12%;
left:38%;
}

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  position: absolute;
left:19%;
top:19%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #EF0031;
  color: white;
}



.buttonn {
  background-color: #4CAF50; /* Green */
  border: none;
  color: #F9A602;
  padding: 8px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: #FDA50F; 
  color: black; 
  border-radius: 8px;
 
}

.button1:hover {
  background-color: #fda60fc7;
  color: white;
}

.button2 {
  background-color: #008CBA; 
  color: black; 
  
  border-radius: 8px;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}





/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 40%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding-left: 29% ;
  background-color: #ef0030cb;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: ;
  color: white;
}
</style>





<h2 class="headerpending">Online Delivery Pending Orders</h2>
<table id="customers">
    <tr>
      <th>Order ID</th>
      <th>Package ID</th>
      <th>No_of_units</th>
      <th>Total</th>
      <th>Status</th>
      
      <th></th>
    </tr>
@foreach ($orders as $order) 
       <tr>
        <td>{{$order->id}}</td>
        <td>{{$order->item_id}}</td>
          <td>{{$order->number_of_units}} Packs</td>
          <td>Rs.{{$order->total_price}}/=</td>
        <td>{{$order->status}}</td>
       <td><form action="/admin/deliver/detail" method="get"><button name="b1"type="submit"class="buttonn button1" value="{{$order->orderId}}">View</button></form><form action="/admin/delivery/complete" method="post">@csrf<button type="submit" name="completebtn"value="{{$order->id}}"class="buttonn button2">Completed</button></form></td>
       </tr>
@endforeach
  


<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
       
        <center><h3>Order Details</h3></center>
      </div>
      <div class="modal-body">
      <center><h6><b>Order ID:</b> #{{$orderId}}</h6></center>
      <center><h6><b>Time:</b> {{$time}}</h6></center>
      <center><h6><b>Package:</b> {{$packname}}</h6></center>
      <center><h6><b>Customer Name:</b> {{$name}}</h6></center>
      <center><h6><b>Address:</b> {{$address}}</h6></center>
      <center><h6><b>Phone No:</b> {{$phone}}</h6></center>
      </div>
      <div class="modal-footer">
        <h3>Modal Footer</h3>
       <center> <a href="/admin/delivery"><button class="button1 button5" >OK</button></a></center>
      </div>
    </div>
  
  </div>
  
  <script>   
    

  // Get the modal
  var modal = document.getElementById("myModal");
  
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  window.onload = function() {
    modal.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>
    
  </table>
  @endsection

