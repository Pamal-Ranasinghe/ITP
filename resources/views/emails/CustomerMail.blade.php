<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yummy hut</title>
</head>
<body>
    <p>Dear {{$details['name']}}</p>
    <p>Your take away order is ready.Please come and grab your order</p>
    <hr>
    
    <p>Customer code : {{$details['cus_id']}}<br>
        Item : {{$details['item_name']}}<br>
        Quantity : {{$details['item_quantity']}}<br>
       <h1> Amount : {{$details['price']}}</h1>
        Thank you
    </p>
</body>
</html>