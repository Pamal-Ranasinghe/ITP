
@php

$msg = session('msg');

@endphp

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.main{
  background-image: url('img/delivery3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  
}
.body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-image: url('img/delivery3.jpg');
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
  background-color: #FEF7D7;
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
  padding: 2px 16px;
  background-color: #ef0030cb;
  color: white;
}

.modal-body {padding: 2px 16px;
  background-color: #FEF7D7;
}

.modal-footer {
  padding: 2px 16px;
  background-color: #FEF7D7;
  color: white;
}




.button1 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}


.button5 {
  background-color: white;
  color: black;
  border: 1px solid #555555;
  border-radius: 15%
}

.button5:hover {
  background-color: #EF0031;
  color: white;
}
</style>
</head>
<body>




<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <center><h2>Order Successful</h2></center>
      </div>
      <div class="modal-body">
      <center><h4>Order ID : #{{session('orderId')}}</h4></center>
      <center><p>Thank You <b>{{session('name')}}</b>!!</p></center>
        <center><p>Your order will be deliverd within 30 minutes</p></center>
      </div>
      <div class="modal-footer">
        <h3></h3>
       <center> <a href="/"><button class="button1 button5" >OK</button></a></center>
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
</body>
</html>
