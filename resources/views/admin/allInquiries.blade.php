@extends('layouts.adminapp')

@section('content')
<center><h1>Employee Management</h1></center> <hr>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="container" style="margin-top:50px;">
                <h5>Inquiry</h5>
                <hr>
                <div class="row">
                    <div class="col-lg-12 ">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{ session('success') }}
                            </div>
                           
                        @endif 
                        <div class="box">
                            <table class="table table-light table-striped">
                                <thead>
                                    <tr>
                                        <th>Employee name</th>
                                        <th>Inquiry</th>                           
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($inquiries as $inquiry)
                                    <tr>
            
                                        <td title="emp_name">{{$inquiry->employee->name}}</td>                            
                                        <td title="emp_designation">{{$inquiry->description}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>   
                            
                        </div>
                        
                    </div>	
                </div>
            </div>
            <div class="row mx-md-n5">
             
            </div>  

      

        </div>
        <div class="col-lg-2"></div>
    </div>
@endsection
