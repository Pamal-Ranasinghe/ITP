@extends('layouts.adminapp')

@section('content')

    <center><h1>All Catering Orders</h1></center> 
    <div class="row">
      <div class="col-lg-5"></div>
      <div class="col-lg-5"></div>
      <div class="col-lg-2">

      </div>

  </div>
    <hr>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          
          <div>
            <table class="table">
              <thead>
                <tr>
                  <th>Report ID</th>
                  <th>Created Date</th>
                  <th>Total Amount</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach($reports as  $report)
              <tbody>
                <tr> 
                  <td>{{$report->id}}</td>
                  <td>{{$report->created_at}}</td>
                  <td>{{$report->amount}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Manage"> 
                    <form action="/delete-one-catering-report/{{$report->id}}" method = "GET" >
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </form>
                      <form action="/to-update-form-catering-order-income/{{$report->id}}" method = "GET" >
                        @csrf   
                      <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </i>
                      </button>
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
            <form action="/download-catering-order-reports" method = "GET">
                @csrf
                <center><button type="submit" class="btn btn-warning" ><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                  Save as PDF</button></center><br>
              </form>
        </div>
      </div> 
@endsection