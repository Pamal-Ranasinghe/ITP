@extends('layouts.userapp')

@section('content')
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-10">
      
      <div>
        <table class="table">

          @foreach($notes as  $note)
          <tbody>
            <tr>
              <td>{{$note->created_at}}</td>
              <td>{{$note->notification}}</td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
    </div>
  

@endsection