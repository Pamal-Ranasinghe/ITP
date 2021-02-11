@extends('layouts.adminapp')

@section('content')
    <center><h1>Order</h1></center> <hr>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="container">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Notification</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($notifications as $notification)
                            <tr>
                                <td title="emp_name">{{$notification->created_at}}</td>
                                <td title="emp_address">{{$notification->notification}}</td>
                                <form action="/admin-delete-notification/{{$notification->id}}" method="GET">
                                    @csrf
                                    <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button></td>
                                </form>

                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>
            </div>

        </div>
        <div class="col-lg-2">
        </div>
        </div>
        
      </div> 
@endsection