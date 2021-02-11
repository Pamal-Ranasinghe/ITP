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
    <center><h3 style="color:red"> Yummy Hut - All Take Away Orders</h3></center><hr>

   <center> <div>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer ID</th>
                    <th>Item ID</th>
                    <th>Type</th>
                    <th>Number of units</th>
                    <th>Status</th>
                    <th>Total Prices</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->customer_id}}</td>
                        <td>{{$order->item_id}}</td>
                        <td>{{$order->type}}</td>
                        <td>{{$order->number_of_units}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->total_price}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

       
    </div></center>
</body>
</html>