<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }       
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
<body>
    <center><h3>All Catering Reports</h3></center><hr>
<table>
  <tr>
    <th>Report ID</th>
    <th>Total Income</th>
  </tr>
  @foreach($reports as $report)
  <tr>
    <td>{{$report->id}}</td>
    <td>{{$report->amount}}</td>
  </tr>
  @endforeach
</table>
</body>
</html>