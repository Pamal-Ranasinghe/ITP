@extends('layouts.adminapp')

@section('content')
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
#reportDownload{
  position:absolute;
  left:90.25%;
  top:12%;
}

</style>
<h2 class="headerpending">Online Delivery Pending Orders</h2>
<a href="/delivery/report"> <button  type="submit" class="btn btn-info" id="reportDownload"><i class="fa fa-download"></i>Report</button></a>
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
       <td><form action="/admin/deliver/detail" method="get"><button name="b1"type="submit"class="buttonn button1" value="{{$order->id}}">View</button></form><form action="/admin/delivery/complete" method="post">@csrf<button type="submit" name="completebtn"value="{{$order->id}}"class="buttonn button2">Completed</button></form></td>
       </tr>
@endforeach
  
    
  </table>


@endsection