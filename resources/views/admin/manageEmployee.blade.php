@extends('layouts.adminapp')

@section('content')
<center><h1>Employee List</h1></center> <hr>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header text-right">
              
                <a href="/createEmployee" class="btn btn-primary">Add Employee</a>
                <a href="/pdf/download" class="btn btn-danger">Export to PDF</a>
            </div>

      
      <div>
        <table class="table">
          <thead>
            <tr>
                <th>Employee Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Date of Birth</th>
                <th>Designation</th>
                <th></th>
            </tr>
          </thead>
          @foreach($employees as  $employee)
          <tbody>
            <tr>
                <td title="emp_name">{{$employee->name}}</td>
                <td title="emp_address">{{$employee->address}}</td>
                <td title="emp_ph_no">{{$employee->ph_no}}</td>
                <td title="emp_dob">{{$employee->dob}}</td>
                <td title="emp_designation">{{ ucwords(str_replace("_"," ", $employee->designation))}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Manage"> 
                        <form action="/editEmployee/{{$employee->id}}" method="GET">
                        @csrf
                            <button class="btn btn-primary" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        </form>                                       
                        <!--<a href="/get-one-employee/{{$employee->id}}" class="btn btn-primary" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>-->
                        <form action="/delete-one-employee/{{$employee->id}}" method = "GET">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </form>
                    </div>                                    
                </td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
  

    </div>
    <div class="col-lg-2">
      <form action="/all-inquiries" method="GET">
        @csrf
        <button type="submit" class="btn btn-primary" value="Inquiries"></button>
      </form>
  </div>
  </div> 
@endsection
