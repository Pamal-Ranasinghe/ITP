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
    <h5>{{$details['title']}}</h5>
    <hr>
    
    <p>
            {{$details['content']}}
    </p>
</body>
</html>