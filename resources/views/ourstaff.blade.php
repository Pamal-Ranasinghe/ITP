@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:50px;margin-bottom:150px;">
	<h5>Our Staff</h5>
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
                            <th></th>
                            <th>Name</th>
                            <th>Designation</th>                            
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>
                            <img src="storage/emp_img/{{$employee->avatar}}" class="img-fluid" width="60" onerror="this.src='https://www.pinclipart.com/picdir/middle/355-3553881_stockvader-predicted-adig-user-profile-icon-png-clipart.png'">
                            </td>
                            <td title="emp_name">{{$employee->name}}</td>                            
                            <td title="emp_designation">{{ ucwords(str_replace("_"," ", $employee->designation))}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Manage">
                                    <form action="/inquiry-for-employee/{{$employee->id}}" method="GET">   
                                        @csrf                                 
                                        <button type="submit" class="btn btn-success" style="white-space: pre;">Inquiry</button>
                                    </form>                                      
                                </div>                                    
                            </td>
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
 @endsection