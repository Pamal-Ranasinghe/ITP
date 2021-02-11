
@extends('layouts.adminapp')

@section('content')


<style>
.headerpending{

    position: absolute;
    top:12%;
    left:35%;
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
  background-color: #008CBA;
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
  top:12.5%;
}

</style>



</head>
<body>





<h2 class="headerpending">Online Delivery Complete Orders</h2>
<a href="/delivery/complete_report"> <button  type="submit" class="btn btn-info" id="reportDownload"><i class="fa fa-download"></i>Report</button></a>
<table id="customers">
    <tr>
      <th>Order ID</th>
      <th>Package</th>
      <th>Type</th>
      <th>Num_of_units</th>
      <th>Total</th>
      <th>Status</th>
      
    </tr>
@foreach ($completes as $complete) 
       <tr>
       <td>{{$complete->id}}</td>
       <td>{{$complete->item_id}}</td>
         <td>{{$complete->type}}</td>
         <td>{{$complete->number_of_units}}</td>
       <td>Rs.{{$complete->total_price}}/=</td>
       <td>{{$complete->status}}</td>
       
       </tr>
@endforeach
  
    
  </table>
</body>







@endsection