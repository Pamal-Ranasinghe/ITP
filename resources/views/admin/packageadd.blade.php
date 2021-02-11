@extends('layouts.adminapp')

@section('content')


@php
    $check = session('check');    

@endphp
@if( $check == 2)
    <script>alert('Package Removed Unsuccessful')</script>
 
@elseif($check== 1)
<script>alert('Package Removed successfully')</script>
@endif
   <head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>

<style>
  
.button5 {
  background-color: #058B31;
  color: black;
  border: 2px solid #555555;
  
  border: none;
  
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 1px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
  .headerpage{
    position: absolute;
    left:47%;
    top:12%;
  }
.add{
  background-color: lightgrey;
  width: 600px;
  border: 10px solid #4b4848;
  padding: 30px 50px 50px 50px;
  margin: 20px;
  position:absolute;
  left:25%;
  top:18%;
}

#removeBtn{
  position:absolute;
  left:85%;
  top:12%;
}

#reportDownload{
  position:absolute;
  left:90.5%;
  top:18%;
}

</style>



</head>
<body>

  <a href="/package/remove"> <button type="submit" class="btn btn-danger" id="removeBtn">Remove Package</button></a>
  <a href="/package/report"> <button  type="submit" class="btn btn-info" id="reportDownload"><i class="fa fa-download"></i>Report</button></a>
  <br>
    <h3 class="headerpage">ADD PACKAGE</h3>
  <div class="add">
    <form action="/package/add" method="POST" enctype="multipart/form-data">
    @csrf
  <label for="fname">Enter package name</label>
  <input type="text" id="fname" name="pname" required>
  <br><br>
  <label for="fname">Enter package Description</label>
  <textarea rows="2" cols="50" name="description" required>
      Enter package description...</textarea>
      <br><br>
      <label for="img">Select image:</label>
    <input type="file" id="img" name="img" required>
  <br><br>
    <label for="discount">Discount:</label>
    <input type="number" id="quantity" name="discount" required>
    <br><br>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required>
  <br><br>
    <input type="submit" value="submit" class="button button5">
  </form>
  </div>
  

  </div>

</body>
</html>




@endsection
