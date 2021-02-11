@extends('layouts.app')

@section('content')
<div class="bd-example">
    <img src="{{URL::asset('/img/catering1.jpg')}}" class="d-block w-100" alt="image">
</div>
<!----------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------->
<!-- Show success message when booking is made  -->
<div class="col-md-12 text-center">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
</div>
@foreach ($cpackages as $cpackage)
<div class="bg-light pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-1">
        <h2 class="display-5">{{$cpackage->p_name}}</h2>
    </div>
    <div class="bg-white shadow mx-auto" style="width: 50%; height: 300px; border-radius: 21px 21px 21px 21px;">
        <br>
        <img src="{{URL::asset('/img/car1.jpg')}}" height="150" width="200" alt="image">
        <p class="lead">{{$cpackage->description}}</p>
        <h5 class="display-5">Rs.{{$cpackage->price}}</h5>
        <a class="btn btn btn-danger" href="/getPackage/{{$cpackage->id}}" title="Book Now!">BOOK NOW </a>
    </div>
    <br>
</div>
</div>
@endforeach
 @endsection