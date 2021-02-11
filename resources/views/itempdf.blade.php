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
    <center><h3 style="color:red"> Yummy Hut - Food and Beverages</h3></center><hr>

   <center> <div>
        <table>
            <thead>
                <tr>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Item Type</th>
                    <th>Item description</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->description}}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>

       
    </div></center>
</body>
</html>