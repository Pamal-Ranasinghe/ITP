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

    <center><h3 style="color:red"> Yummy Hut - Packages</h3></center><hr>
    
   
   <center> <div>
        <table>
            <thead>
                <tr>
                    <th>Package ID</th>
                    <th>Package Name</th>
                    <th>Added Date</th>
                    <th>Price</th>
                    <th>Disconut</th>
                    <th>Discription</th>
                   
                   
                </tr>
            </thead>    
            <tbody>
                @foreach ($packages as $package)
                    <tr>
                        <td>{{$package->id}}</td>
                        <td>{{$package->name}}</td>
                        <td>{{$package->created_at}}</td>
                        <td>{{$package->price}}</td>
                        <td>{{$package->discount}}</td>
                        <td>{{$package->discription}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

       
    </div></center>
</body>
</html>