<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
    <table class="table table-bordered table-reponsive">
    <thead>
      <tr class="table-danger">
        <td>Name</td>
        <td>Email</td>
        <td>Designation</td>
        <td>Address</td>
        <td>DOB</td>
        <td>Phone Number</td>       
      </tr>
      </thead>
      <tbody>
        @foreach ($employee as $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ ucwords(str_replace("_"," ", $data->designation))}}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->dob }}</td>
            <td>{{ $data->ph_no }}</td>           
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>