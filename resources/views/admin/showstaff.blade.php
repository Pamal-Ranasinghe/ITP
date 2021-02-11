@extends('layouts.adminapp')

@section('content')
    <center><h1>Order</h1></center> <hr>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-right">
                                <a href="{{route('employees.create')}}" class="btn btn-primary">Add Employee</a>
                                <a href="{{ URL::to('/pdf/download') }}" class="btn btn-danger">Export to PDF</a>
                            </div>
            
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible">
                                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        {{ session('success') }}
                                    </div>
                                   
                                @endif 
                                <table class="table table-responsive table-dark">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Employee Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Date of Birth</th>
                                            <th>Designation</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($employees as $employee)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/images/' . $employee->id. '/'.$employee->avatar)}}" class="img-fluid" width="60" onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png'">
                                            </td>
                                            <td title="emp_name">{{$employee->name}}</td>
                                            <td title="emp_address">{{$employee->address}}</td>
                                            <td title="emp_ph_no">{{$employee->ph_no}}</td>
                                            <td title="emp_dob">{{$employee->dob}}</td>
                                            <td title="emp_designation">{{ ucwords(str_replace("_"," ", $employee->designation))}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Manage">                                        
                                                    <a href="{{ route('employees.edit', ['employee' => $employee->id ]) }}" class="btn btn-primary" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    <a href="{{ route('employees.destroy', ['employee' => $employee->id ]) }}" class=" btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $employee->id }}').submit();"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    <form id="delete-form-{{ $employee->id }}" action="{{ route('employees.destroy', ['employee' => $employee->id ]) }}"
                                                         method="POST" style="display: none;">
                                                         @method('DELETE')
                                                        @csrf
                                                    </form>
                                                </div>                                    
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>   
                                {{$employees->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-2">
        </div>
        </div>
        
      </div> 
@endsection