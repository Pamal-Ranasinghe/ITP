<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--styles-->
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        
      }
    </style>
</head>
<body>
    <center><h3 style="color:red"> Yummy Hut - All Catering Orders</h3></center><hr>

   <center> <div>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>name</th>
                    <th>customer Name</th>
                    <th>catering_package_name</th>
                    <th>date</th>
                    <th>location</th>
                    <th>Guests</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->customer->name}}</td>
                        <td>{{$order->cateringPackage->p_name}}</td>
                        <td>{{$order->date_time}}</td>
                        <td>{{$order->location}}</td>
                        <td>{{$order->guests}}</td>
                        <td>{{$order->amount}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

       
    </div></center>
</body>
</html>