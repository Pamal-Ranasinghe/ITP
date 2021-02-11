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

    <center><h3 style="color:red"> Yummy Hut - Pending Orders</h3></center><hr>
    
   
   <center> <div>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Package ID</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Status</th>
                   
                   
                </tr>
            </thead>    
            <tbody>
                @foreach ($delivery as $delivery)
                    <tr>
                        <td>{{$delivery->id}}</td>
                        <td>{{$delivery->item_id}}</td>
                        <td>{{$delivery->created_at}}</td>
                        <td>{{$delivery->type}}</td>
                        <td>{{$delivery->number_of_units}}</td>
                        <td>Rs.{{$delivery->total_price}}/=</td>
                        <td>{{$delivery->status}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

       
    </div></center>
</body>
</html>