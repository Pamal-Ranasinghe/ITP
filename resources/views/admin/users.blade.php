@extends('layouts.adminapp')

@section('content')

    <center><h1>Registered Customers</h1></center> 
    <div class="row">
      <div class="col-lg-5"></div>
      <div class="col-lg-5"></div>
      <div class="col-lg-2">
        <form action="/search-reg-cus" method="get">
          <h1 class="h3"><input class="form-control" type="search" name="search" placeholder="Search"
                  aria-label="Search" title="search"></h1>
                  @error('record')
                    <p style="color: red">{{$message}}</p>                      
                  @enderror
          </form>
      </div>

  </div>
    <hr>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <form action="/set-notification" method="GET" >
            @csrf
            <input type="text" name="notification" id="notification" placeholder="Notification for all registered customers..." class="form-control">
            @error('notification')
              <p style = "color:red;">{{$message}}</p> 
            @enderror

            <button type="submit" class="btn btn-danger" style="float: right;margin-top:5px;margin-bottom:10px;"><i class="fa fa-share" aria-hidden="true"></i>
            </button> 
          </form>
          <div>
            <table class="table">
              <thead>
                <tr>
                  <th>User name</th>
                  <th>User Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach($users as  $user)
              <tbody>
                <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td> 
                  <form action="email-form-reg-cus/{{$user->id}}" method="GET">
                      @csrf
                      <button type="submit" class="btn btn-dark"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                      </button>
                  </form>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
  
        </div>
        <div class="col-lg-2">
          <form action="/admin-get-all-notes" method="GET">
            @csrf
            <center><button type="submit" class="btn btn-dark">
            Notifications <i class="fa fa-sticky-note" aria-hidden="true"></i></button></center>
        </form>
        </div> 
@endsection
